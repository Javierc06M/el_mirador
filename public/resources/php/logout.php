<?php
include '../../../config/app.php';
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // Destruir la sesión
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Destruye la sesión actual

    // Redirigir a la página de inicio de sesión
    header("Location: ../../../views/inicio.php?message=Cierre%20de%20sesión%20exitoso");
    exit();
} else {
    // Si no hay sesión iniciada, redirigir a la página de inicio de sesión
    header("Location: login-register.php");
    exit();
}
?>
