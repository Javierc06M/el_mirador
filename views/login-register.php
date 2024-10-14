<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/resources/css/register.css?v=<?php echo time(); ?>">
    <title>Login / Registro</title>
</head>
<body>
    <div class="container" id="container">
        <!-- Mostrar mensaje de éxito o error -->
        <?php if (isset($_GET['registered']) && $_GET['registered'] == 'true'): ?>
            <div class="success-message" id="successMessage">
                <?php echo htmlspecialchars($_GET['message']); ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="error-message" id="errorMessage">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <div class="form-container sign-up-container">
            <form id="signUpForm" action="../public/resources/php/registeruser.php" method="POST">
                <h1>Crear Cuenta</h1>
                <input type="text" placeholder="Nombre" id="signUpName" name="nombre" required />
                <input type="text" placeholder="Apellidos" id="signUpName" name="apellido" required />
                <input type="email" placeholder="Email" id="signUpEmail" name="email" required />
                <input type="text" placeholder="Telefono" id="signUpName" name="telefono" required />
                <input type="text" placeholder="Usuario" id="signUpName" name="user" required />
                <div class="input-group">
                    <input type="password" placeholder="Contraseña" id="signUpPassword" name="password" required />
                    <span class="toggle-password" onclick="togglePassword('signUpPassword', this)">👁️</span>
                </div>
                <button type="submit">Registrarse</button>
                <div id="signUpMessage"></div>
                <div class="mobile-toggle">
                    <a href="#" id="mobileSignIn">¿Ya tienes una cuenta? Inicia sesión</a>
                </div>
            </form>
        </div>
        
        <div class="form-container sign-in-container">
            <form id="signInForm" action="../public/resources/php/loginuser.php" method="POST">
                <h1>Iniciar Sesión</h1>
                <input type="email" name="correo" placeholder="Email" id="signInEmail" required />
                <div class="input-group">
                    <input type="password" name="contraseña" placeholder="Contraseña" id="signInPassword" required />
                    <span class="toggle-password" onclick="togglePassword('signInPassword', this)">👁️</span>
                </div>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button type="submit">Iniciar Sesión</button>
                <div id="signInMessage"></div>
                <div class="mobile-toggle">
                    <a href="#" id="mobileSignUp">¿No tienes una cuenta? Regístrate</a>
                </div>
            </form>
        </div>
        
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Bienvenido de vuelta!</h1>
                    <p>Para mantenerte conectado con nosotros, por favor inicia sesión con tu información personal</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Hola, amigo!</h1>
                    <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/resources/js/register.js?v= <?php echo time(); ?>"></script>

    <style>
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin: 15px 0;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            position: absolute; /* Para superponer */
            top: 20px; /* Ajustar según sea necesario */
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000; /* Asegurar que esté encima de otros elementos */
            animation: fade-in-out 3s; /* Animación */
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin: 15px 0;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            position: absolute; /* Para superponer */
            top: 70px; /* Ajustar según sea necesario */
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000; /* Asegurar que esté encima de otros elementos */
        }

        @keyframes fade-in-out {
            0% { opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>

    <script>
        // Función para ocultar el mensaje de éxito o error después de un tiempo
        function hideMessage(id) {
            const messageElement = document.getElementById(id);
            if (messageElement) {
                setTimeout(() => {
                    messageElement.style.display = 'none';
                }, 3000); // Tiempo en milisegundos (3 segundos)
            }
        }

        // Llamar a la función para ocultar los mensajes
        hideMessage('successMessage');
        hideMessage('errorMessage');
    </script>
</body>
</html>
