<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/register.css">
    <title>Login / Registro</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="signUpForm" action="php/registeruser.php" method="POST">
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
            <form id="signInForm">
                <h1>Iniciar Sesión</h1>
                <input type="email" placeholder="Email" id="signInEmail" required />
                <div class="input-group">
                    <input type="password" placeholder="Contraseña" id="signInPassword" required />
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

    <script src="js/register.js"></script>
</body>
</html>