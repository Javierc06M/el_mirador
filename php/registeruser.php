<?php
// registeruser.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "el_mirador"; // Cambiar por el nombre de la base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['user'];
    $contrasena = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

    // Verificar si el correo, teléfono o nombre de usuario ya están registrados
    $checkSql = "SELECT cod_usuario FROM usuarios WHERE correo = ? OR telefono = ? OR usuario = ?";
    $stmt = $conn->prepare($checkSql);

    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    $stmt->bind_param("sss", $email, $telefono, $usuario);
    $stmt->execute();
    $stmt->store_result();

    // Comprobar si ya existe un registro con el correo, teléfono o usuario ingresado
    if ($stmt->num_rows > 0) {
        // Redirigir con mensaje de error
        header("Location: ../login-register.php?error=El correo, teléfono o nombre de usuario ya están registrados");
        exit();
    }

    // Cerrar la consulta previa
    $stmt->close();

    // Preparar consulta SQL para insertar el nuevo usuario de forma segura
    $insertSql = "INSERT INTO usuarios (nombre, apellido, correo, telefono, usuario, contraseña)
                  VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($insertSql);

    if ($stmt === false) {
        die("Error al preparar la consulta de inserción: " . $conn->error);
    }

    $stmt->bind_param("ssssss", $nombre, $apellido, $email, $telefono, $usuario, $contrasena);

    if ($stmt->execute()) {
        // Registro exitoso, enviar redirección con mensaje de éxito
        header("Location: ../login-register.php?registered=true&message=Registro%20exitoso");
        exit();
    } else {
        // Redirigir con mensaje de error
        header("Location: ../login-register.php?error=Error al registrar usuario: " . $stmt->error);
        exit();
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>
