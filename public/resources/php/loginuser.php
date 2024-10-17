<?php
include '../../../routes/web.php';
// loginuser.php
session_start(); // Iniciar sesión

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
    $email = $_POST['correo'];
    $password = $_POST['contraseña'];

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($password, $user['contraseña'])) {
            // Contraseña correcta, iniciar sesión
            $_SESSION['user_id'] = $user['id']; // Guardar el ID del usuario en la sesión
            $_SESSION['usuario'] = $user['usuario']; // Guardar el nombre de usuario en la sesión
            
            // Redirigir al usuario a la página principal o a la cuenta
            header("Location: $url .'views/inicio.php'"); // Cambia a la ruta deseada
            exit();
        } else {
            // Contraseña incorrecta
            header("Location: $url .'views/login-register.php?error=Contraseña incorrecta'");
            exit();
        }
    } else {
        // Usuario no encontrado
        header("Location: $url .'views/login-register.php?error=Usuario no encontrado'");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>