<?php
    include '../config/app.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedaje El Mirador</title>
    <link rel="stylesheet" href="<?php echo $url .'public/resources/css/habitaciones.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="/placeholder.svg?height=40&width=40" alt="Logo Hospedaje Sereno" class="logo-img">
                <span class="logo-text">El Mirador</span>
            </div>
            <nav class="desktop-nav">
                <a href="#inicio" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
                <a href="#habitaciones" class="nav-link"><i class="fas fa-bed"></i> Habitaciones</a>
                <a href="#servicios" class="nav-link"><i class="fas fa-concierge-bell"></i> Servicios</a>
                <a href="#contacto" class="nav-link"><i class="fas fa-envelope"></i> Contacto</a>
                <button class="login-btn">
                    <i class="fas fa-user"></i> Iniciar Sesión
                </button>
            </nav>
            <button class="menu-toggle" aria-label="Abrir menú">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <nav class="mobile-nav">
        <a href="#inicio" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
        <a href="#habitaciones" class="nav-link"><i class="fas fa-bed"></i> Habitaciones</a>
        <a href="#servicios" class="nav-link"><i class="fas fa-concierge-bell"></i> Servicios</a>
        <a href="#contacto" class="nav-link"><i class="fas fa-envelope"></i> Contacto</a>
        <button class="login-btn">
            <i class="fas fa-user"></i> Iniciar Sesión
        </button>
    </nav>

    <main>
        <section id="inicio" class="hero">
            <div class="hero-carousel">
                <div class="hero-slide" style="background-image: url(<?php echo $url .'public/resources/img/chacha.jpeg'?>);">
                    <div class="hero-content">
                        <h1>Bienvenido a Hospedaje El Mirador</h1>
                        <p>Tu hogar lejos de casa en el corazón de la ciudad</p>
                        <a href="#habitaciones" class="cta-btn">Ver Habitaciones</a>
                    </div>
                </div>
                <div class="hero-slide" style="background-image: url(<?php echo $url .'public/resources/img/room5.png'?>);">
                    <div class="hero-content">
                        <h1>Descubre Nuestras Habitaciones</h1>
                        <p>Confort y estilo para cada tipo de viajero</p>
                        <a href="#habitaciones" class="cta-btn">Explorar Ahora</a>
                    </div>
                </div>
                <div class="hero-slide" style="background-image: url('<?php echo $url .'public/resources/img/services.png'?>');">
                    <div class="hero-content">
                        <h1>Servicios de Primera Clase</h1>
                        <p>Disfruta de nuestras instalaciones y comodidades</p>
                        <a href="#servicios" class="cta-btn">Ver Servicios</a>
                    </div>
                </div>
            </div>
            <div class="hero-controls">
                <button class="hero-control prev" aria-label="Anterior slide"><i class="fas fa-chevron-left"></i></button>
                <button class="hero-control next" aria-label="Siguiente slide"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>

        <section id="habitaciones" class="rooms">
            <div class="container">
                <h2>Nuestras Habitaciones</h2>
                <div class="category-menu">
                    <button class="category-btn active" data-category="todas">Todas</button>
                    <button class="category-btn" data-category="simple">Simples</button>
                    <button class="category-btn" data-category="doble">Dobles</button>
                    <button class="category-btn" data-category="matrimonial">Matrimoniales</button>
                    <button class="category-btn" data-category="grupal">Grupales</button>
                </div>
                <div class="room-catalog">
                    <div class="room-card" data-category="simple">
                        <img src="<?php echo $url .'public/resources/img/room-individual.png'?>" alt="Habitación Individual" class="room-image">
                        <div class="room-info">
                            <h3>Habitación Individual</h3>
                            <p>Perfecta para viajeros solitarios</p>
                            <span class="room-price">$50/noche</span>
                            <div class="room-services">
                                <span class="service-item"><i class="fas fa-wifi"></i> Wi-Fi</span>
                                <span class="service-item"><i class="fas fa-tv"></i> TV</span>
                                <span class="service-item"><i class="fas fa-wind"></i> A/C</span>
                            </div>
                            <a href="#" class="book-btn">Reservar</a>
                        </div>
                    </div>
                    <div class="room-card" data-category="doble">
                        <img src="<?php echo $url .'public/resources/img/room-doble.jpg'?>" alt="Habitación Doble" class="room-image">
                        <div class="room-info">
                            <h3>Habitación Doble</h3>
                            <p>Ideal para parejas o amigos</p>
                            <span class="room-price">$80/noche</span>
                            <div class="room-services">
                                <span class="service-item"><i class="fas fa-wifi"></i> Wi-Fi</span>
                                <span class="service-item"><i class="fas fa-tv"></i> TV</span>
                                <span class="service-item"><i class="fas fa-wind"></i> A/C</span>
                                <span class="service-item"><i class="fas fa-parking"></i> Parking</span>
                            </div>
                            <a href="#" class="book-btn">Reservar</a>
                        </div>
                    </div>
                    <div class="room-card" data-category="matrimonial">
                        <img src="<?php echo $url .'public/resources/img/room.matrimonial.jpg'?>" alt="Suite Matrimonial" class="room-image">
                        <div class="room-info">
                            <h3>Suite Matrimonial</h3>
                            <p>Romántica y espaciosa</p>
                            <span class="room-price">$100/noche</span>
                            <div class="room-services">
                                <span class="service-item"><i class="fas fa-wifi"></i> Wi-Fi</span>
                                <span class="service-item"><i class="fas fa-tv"></i> TV</span>
                                <span class="service-item"><i class="fas fa-wind"></i> A/C</span>
                                <span class="service-item"><i class="fas fa-parking"></i> Parking</span>
                                <span class="service-item"><i class="fas fa-coffee"></i> Desayuno</span>
                            </div>
                            <a href="#" class="book-btn">Reservar</a>
                        </div>
                    </div>
                    <div class="room-card" data-category="grupal">
                        <img src="<?php echo $url .'public/resources/img/room-grupal.png'?>" alt="Habitación Familiar" class="room-image">
                        <div class="room-info">
                            <h3>Habitación Familiar</h3>
                            <p>Perfecta para grupos o familias</p>
                            <span class="room-price">$150/noche</span>
                            <div class="room-services">
                                <span class="service-item"><i class="fas fa-wifi"></i> Wi-Fi</span>
                                <span class="service-item"><i class="fas fa-tv"></i> TV</span>
                                <span class="service-item"><i class="fas fa-wind"></i> A/C</span>
                                <span class="service-item"><i class="fas fa-parking"></i> Parking</span>
                                <span class="service-item"><i class="fas fa-coffee"></i> Desayuno</span>
                                <span class="service-item"><i class="fas fa-utensils"></i> Cocina</span>
                            </div>
                            <a href="#" class="book-btn">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicios" class="services">
            <div class="container">
                <h2>Nuestros Servicios</h2>
                <div class="service-grid">
                    <a href="tours.php">
                        <div class="service-card">
                            <i class="fas fa-wifi"></i>
                            <h3>Tours</h3>
                            <p>Conectate con toda la cultura de <strong>Chachapoyas</strong>en un viaje sin igual</p>
                        </div>
                    </a>    
                    <a href="restaurante.php">                    
                        <div class="service-card">
                            <i class="fas fa-utensils"></i>
                            <h3>Menu</h3>
                            <p>Buffet variado todas las mañanas</p>
                        </div>
                    </a>
                    <div class="service-card">
                        <i class="fas fa-dumbbell"></i>
                        <h3>Gimnasio</h3>
                        <p>Equipamiento moderno disponible 24/7</p>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-swimming-pool"></i>
                        <h3>Piscina</h3>
                        <p>Relájate en nuestra piscina al aire libre</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="contact">
            <div class="container">
                <h2>Contáctanos</h2>
                <form class="contact-form">
                    <input type="text" placeholder="Nombre" required>
                    <input type="email" placeholder="Email" required>
                    <textarea placeholder="Mensaje" required></textarea>
                    <button type="submit" class="submit-btn">Enviar Mensaje</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Hospedaje Sereno</h3>
                    <p>Tu hogar lejos de casa en el corazón de la ciudad.</p>
                </div>
                <div class="footer-section">
                    <h3>Enlaces Rápidos</h3>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#habitaciones">Habitaciones</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Calle Principal 123, Ciudad</p>
                    <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                    <p><i class="fas fa-envelope"></i> info@hospedajesereno.com</p>
                </div>
                <div class="footer-section">
                    <h3>Síguenos</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Hospedaje Sereno. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" class="whatsapp-btn" aria-label="Contactar por WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <div id="room-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modal-room-title"></h2>
            <img id="modal-room-image" src="" alt="Imagen de la habitación">
            <p id="modal-room-description"></p>
            <p id="modal-room-price"></p>
            <div id="modal-room-services"></div>
            <a href="#" class="book-btn">Reservar Ahora</a>
        </div>
    </div>

    <script src="<?php echo $url .'public/resources/js/habitaciones.js' ?>"></script>
</body>
</html>