<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Catálogo de habitaciones para tu hospedaje ideal, con opciones para todos: grupales, simples, dobles y matrimoniales.">
    <title>Catálogo de Habitaciones | Hotel XYZ</title>
    <link rel="stylesheet" href="<?php echo $url .'public/resources/css/habitaciones.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Hospedaje El Mirador</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#catalogo">Catálogo</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <div class="hero-content">
            <h2>Encuentra tu habitación perfecta</h2>
            <p>Explora nuestras opciones según tus necesidades.</p>
            <a href="#catalogo" class="cta-btn">Ver Habitaciones</a>
        </div>
    </section>

    <section id="catalogo">
        <h2>Catálogo de Habitaciones</h2>
        <div class="search-container">
            <input type="text" id="searchInput" onkeyup="searchRooms()" placeholder="Buscar habitaciones por tipo...">
        </div>

        <div id="roomCatalog" class="room-catalog">
            <div class="room-card" data-category="grupal">
                <img src="<?php echo $url .'public/resources/img/room1.avif' ?>" alt="Habitación Grupal">
                <div class="room-info">
                    <h3>Habitación Grupal</h3>
                    <p>Capacidad para 8 personas, ideal para grupos grandes.</p>
                    <p class="price">Desde $100 / noche</p>
                    <a href="#" class="room-btn">Reservar</a>
                </div>
            </div>
            <div class="room-card" data-category="simple">
                <img src="<?php echo $url .'public/resources/img/room2.jpg' ?>" alt="Habitación Simple">
                <div class="room-info">
                    <h3>Habitación Simple</h3>
                    <p>Perfecta para viajeros solitarios, equipada con todo lo necesario.</p>
                    <p class="price">Desde $50 / noche</p>
                    <a href="#" class="room-btn">Reservar</a>
                </div>
            </div>
            <div class="room-card" data-category="doble">
                <img src="<?php echo $url .'public/resources/img/room3.avif' ?>" alt="Habitación Doble">
                <div class="room-info">
                    <h3>Habitación Doble</h3>
                    <p>Ideal para compartir, con dos cómodas camas.</p>
                    <p class="price">Desde $80 / noche</p>
                    <a href="#" class="room-btn">Reservar</a>
                </div>
            </div>
            <div class="room-card" data-category="matrimonial">
                <img src="<?php echo $url .'public/resources/img/room4.jpg' ?>" alt="Habitación Matrimonial">
                <div class="room-info">
                    <h3>Habitación Matrimonial</h3>
                    <p>Confort y lujo para parejas en una cama king size.</p>
                    <p class="price">Desde $120 / noche</p>
                    <a href="#" class="room-btn">Reservar</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Hospedaje El Mirador. Todos los derechos reservados.</p>
            <p><i class="fas fa-phone"></i> +51 123 456 789</p>
            <p><i class="fas fa-envelope"></i> info@elmirador.com</p>
        </div>
    </footer>

    <script src="<?php echo $url .'public/resources/js/habitaciones.js' ?>"></script>
</body>
</html>