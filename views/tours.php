<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubre Perú - Tours y Aventuras</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url .'public/resources/css/tours.css' ?>">
</head>
<body>
<header>
    <div class="container">
        <nav>
            <div class="logo">
                <i class="fas fa-map-marker-alt"></i>
                Descubre Amazonas
            </div>
            <div class="user-menu">
                <button class="toggle-user-menu">
                    <i class="fas fa-user-circle"></i>
                    <span>Username</span>
                </button>
                <ul class="user-dropdown">
                    <li><a href="#"><i class="fas fa-cog"></i> Configurar cuenta</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
                </ul>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#about">Acerca de</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>


    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Explora las maravillas de CHACHAPOYAS</h1>
                <p>Vive aventuras inolvidables y descubre los destinos más impresionantes.</p>
                <a href="#" class="cta-button">Reserva tu Tours</a>
            </div>
        </section>

        <section class="destinations container">
            <h2 class="section-title">Nuestros Destinos</h2>
            <div class="destination-grid">
                <div class="destination-card">
                    <img src="<?php echo $url .'public/resources/img/chachapoyas.jpg' ?>" alt="Chachapoyas">
                    <div class="destination-content">
                        <h3>CHACHAPOYAS</h3>
                        <p>Uno de los destinos más emblemáticos de Perú, envuelto en historia y misterio.</p>
                        <span class="price">Desde $200</span>
                        <a href="#" class="book-button">Reserva ahora</a>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="<?php echo $url .'public/resources/img/kuelap.jpeg' ?>" alt="Kuelap">
                    <div class="destination-content">
                        <h3>Fortaleza De Kuelap</h3>
                        <p>Explora el lago navegable más alto del mundo y su rica cultura.</p>
                        <span class="price">Desde $150</span>
                        <a href="#" class="book-button">Reserva ahora</a>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="<?php echo $url .'public/resources/img/gocta.jpeg' ?>" alt="Gocta">
                    <div class="destination-content">
                        <h3>Catarata De Gocta</h3>
                        <p>Adéntrate en la jungla amazónica y descubre su biodiversidad única.</p>
                        <span class="price">Desde $300</span>
                        <a href="#" class="book-button">Reserva ahora</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-content">
            <p>&copy; 2024 Hospedaje El Mirador. Todos los derechos reservados.</p>
            <ul class="footer-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Política de Privacidad</a></li>
                <li><a href="#">Términos y Condiciones</a></li>
            </ul>
        </div>
    </footer>

    <script src="<?php echo $url .'public/resources/js/tours.js' ?>"></script>
</body>
</html>
