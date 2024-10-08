<?php 
include 'conexion.php';

// Función para verificar si un valor ya existe en la base de datos
function valorExiste($con, $tabla, $columna, $valor) {
    $sql = "SELECT COUNT(*) as count FROM $tabla WHERE $columna = ?";
    $stmt = mysqli_prepare($con, $sql);
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . mysqli_error($con));
    }
    mysqli_stmt_bind_param($stmt, "s", $valor);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $row['count'] > 0;
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $usuario = $_POST['user'] ?? '';
    $password = $_POST['password'] ?? '';

    $errores = [];

    // Validaciones
    if (empty($nombre) || empty($apellido) || empty($email) || empty($telefono) || empty($usuario) || empty($password)) {
        $errores[] = "Por favor, complete todos los campos.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Por favor, ingrese un email válido.";
    }

    if (valorExiste($con, 'usuarios', 'correo', $email)) {
        $errores[] = "El email ya está registrado.";
    }

    if (valorExiste($con, 'usuarios', 'usuario', $usuario)) {
        $errores[] = "El nombre de usuario ya está en uso.";
    }

    if (valorExiste($con, 'usuarios', 'telefono', $telefono)) {
        $errores[] = "El número de teléfono ya está registrado.";
    }

    if (empty($errores)) {
        // Hash de la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Preparar la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono, usuario, contraseña) VALUES (?, ?, ?, ?, ?, ?)";

        // Preparar la declaración
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . mysqli_error($con));
        }

        // Vincular parámetros
        if (!mysqli_stmt_bind_param($stmt, "ssssss", $nombre, $apellido, $email, $telefono, $usuario, $hashed_password)) {
            die("Error al vincular parámetros: " . mysqli_stmt_error($stmt));
        }

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            echo "Registro exitoso. ¡Bienvenido!";
        } else {
            echo "Error al registrar: " . mysqli_stmt_error($stmt);
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        // Mostrar errores
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    }
}

// Cerrar la conexión
mysqli_close($con);
?>