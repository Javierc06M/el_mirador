<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="style/desplegable.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="style/responsive.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="style/services.css?v=<?php echo time();?>">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Etiquetas flotantes -->
    <div class="floating-tags">
        <a href="#como-llegar" class="floating-tag" id="how-to-arrive">
            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
            <span>¿Cómo llegar?</span>
            <span class="sr-only">Información sobre cómo llegar al hospedaje</span>
        </a>
        <a href="#contacto" class="floating-tag" id="contact-us">
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <span>Contáctanos</span>
            <span class="sr-only">Formulario de contacto</span>
        </a>
    </div>

    <header>
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <img src="img/logjpg" alt="Hospedaje El Mirador" class="logo-img" width="50px" height="" >
            </div>
            <?php session_start(); // Asegúrate de iniciar la sesión ?>
            
            <nav class="nav">
                <a href="#" class="nav-item"><i class="fas fa-heart"></i> <span>Favoritos</span></a>
                <a href="#" class="nav-item"><i class="fas fa-globe"></i> <span>ES · S/.</span></a>
                
                <?php if (isset($_SESSION['usuario'])): ?>
                    <div class="nav-item user-item">
                        <div class="user-info">
                            <i class="fas fa-user-circle"></i>
                            <span class="username"><?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                            <button class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle user menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                        </div>
                        <div class="dropdown-content">
                            <a href="perfil.php">Perfil</a>
                            <a href="php/logout.php">Cerrar sesión</a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="login-register.php" class="nav-item"><i class="fas fa-user"></i> <span>Iniciar sesión</span></a>
                <?php endif; ?>
            </nav>

            <?php if (isset($_SESSION['usuario'])): ?>
                <button id="menu-toggle" class="menu-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="sidebar-overlay"></div>
                <div class="sidebar">
                    <div class="sidebar-header">
                        <h2>Menú Principal</h2>
                        <button class="close-sidebar" aria-label="Cerrar menú">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <nav class="sidebar-nav">
                        <a href="#" class="sidebar-item"><i class="fas fa-home"></i> Inicio</a>
                        <a href="#" class="sidebar-item"><i class="fas fa-hotel"></i> Habitaciones</a>
                        <a href="restaurante.php" class="sidebar-item"><i class="fas fa-utensils"></i> Restaurante</a>
                        <a href="#" class="sidebar-item"><i class="fas fa-spa"></i> Servicios</a>
                        <a href="#" class="sidebar-item"><i class="fas fa-info-circle"></i> Acerca de</a>
                    </nav>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>


    <section class="hero">
        <h1>La Mejor Estancia Siempre A Tu Disposicion</h1>
        <p>Nosotros hacemos la búsqueda. Tú ahorras.</p>

        <div class="search-box">
            <div class="search-item">
                <i class="fas fa-calendar-alt"></i>
                <input type="text" placeholder="Entrada -- / -- / --">
            </div>
            <div class="search-item">
                <i class="fas fa-calendar-alt"></i>
                <input type="text" placeholder="Salida -- / -- / --">
            </div>
            <div class="search-item">
                <i class="fas fa-user-friends"></i>
                <select class="tipo" value="" name="" id="">
                    <option value="Grupal">Grupal</option>
                    <option value="Simple">Simple</option>
                    <option value="Doble">Doble</option>
                    <option value="Matrimonial">Matrimonial</option>
                </select>
            </div>
            <button class="search-button">Buscar</button>
        </div>
    </section>

    <main>
        <!-- Sección de filtros -->
        <section class="section">
            <div class="container">
                <h2 class="section-title">Nuestras Habitaciones</h2>
                <div class="filter-section">
                    <button class="filter-btn active" data-filter="all">Todos</button>
                    <button class="filter-btn" data-filter="grupales">Grupales</button>
                    <button class="filter-btn" data-filter="simples">Simples</button>
                    <button class="filter-btn" data-filter="dobles">Dobles</button>
                    <button class="filter-btn" data-filter="matrimoniales">Matrimoniales</button>
                </div>
                
                <div class="price-filter">
                    <label for="price-range">Buscar Por Precio:</label>
                    <input type="number" id="price-range" placeholder="Ingrese el precio en S/">
                    <button onclick="filterRooms()">Buscar</button>
                </div>
            
                <div class="room-cards">
                    <div class="room-card grupales">
                        <img src="img/room1.avif" alt="Habitación Grupal" class="card-img">
                        <div class="room-card-content">
                            <h2>Habitación Deluxe Grupal</h2>
                            <p>Una habitación cómoda con vista al mar, camas amplias, wifi gratuito, y desayuno incluido.</p>
                            <ul>
                                <li><i class="fas fa-bed"></i> 4 Camas individuales</li>
                                <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                                <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                                <li><i class="fas fa-tv"></i> TV de 50''</li>
                            </ul>
                            <div class="price">
                                <span>S/ 300.00</span>
                                <button class="book-now">Reservar</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="room-card simples">
                        <img src="img/room2.jpg" alt="Habitación Simple" class="card-img">
                        <div class="room-card-content">
                            <h2>Habitación Simple Confort</h2>
                            <p>Perfecta para el viajero solitario, con todas las comodidades necesarias.</p>
                            <ul>
                                <li><i class="fas fa-bed"></i> 1 Cama individual</li>
                                <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                                <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                                <li><i class="fas fa-tv"></i> TV de 32''</li>
                            </ul>
                            <div class="price">
                                <span>S/ 100.00</span>
                                <button class="book-now">Reservar</button>
                            </div>
                        </div>
                    </div>
            
                    <div class="room-card dobles">
                        <img src="img/room3.avif" alt="Habitación Doble" class="card-img">
                        <div class="room-card-content">
                            <h2>Habitación Doble Superior</h2>
                            <p>Espaciosa habitación con dos camas, ideal para amigos o familiares.</p>
                            <ul>
                                <li><i class="fas fa-bed"></i> 2 Camas individuales</li>
                                <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                                <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                                <li><i class="fas fa-tv"></i> TV de 40''</li>
                            </ul>
                            <div class="price">
                                <span>S/ 200.00</span>
                                <button class="book-now">Reservar</button>
                            </div>
                        </div>
                    </div>

                    <div class="room-card matrimoniales">
                        <img src="img/room4.jpg" alt="Habitación Matrimonial" class="card-img">
                        <div class="room-card-content">
                            <h2>Suite Matrimonial</h2>
                            <p>Lujosa suite con cama king-size, perfecta para parejas en busca de confort y romance.</p>
                            <ul>
                                <li><i class="fas fa-bed"></i> 1 Cama King-size</li>
                                <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                                <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                                <li><i class="fas fa-tv"></i> TV de 55''</li>
                            </ul>
                            <div class="price">
                                <span>S/ 250.00</span>
                                <button class="book-now">Reservar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de restaurantes -->
        <section id="restaurants" class="section" style="background-color: #f9f9f9;">
            <div class="container">
                <h2 class="section-title">Experiencias Culinarias</h2>
                
                <p class="section-subtitle">Descubre sabores únicos en nuestros restaurantes de clase mundial</p>
                <div class="restaurant-cards">
                    <div class="restaurant-card">
                        <img src="img/restaurante.jpeg" alt="Restaurante El Mirador" class="card-img">
                        <div class="restaurant-card-content">
                            <h3 class="card-title">El Mirador</h3>
                            <p class="card-description">Disfrute de una cocina gourmet con vistas panorámicas de la ciudad. Nuestra carta fusiona sabores locales con técnicas internacionales.</p>
                            <a href="#" class="card-button">Explorar Menú</a>
                        </div>
                    </div>
                    <div class="restaurant-card">
                        <img src="img/coffe.jpeg" alt="Café del Sol" class="card-img">
                        <div class="restaurant-card-content">
                            <h3 class="card-title">Café del Sol</h3>
                            <p class="card-description">Un acogedor café con deliciosos postres y bebidas artesanales. El lugar perfecto para relajarse y disfrutar de la atmósfera local.</p>
                            <a href="#" class="card-button">Ver Ofertas</a>
                        </div>
                    </div>
                    <div class="restaurant-card">
                        <img src="img/terraza.jpeg" alt="La Terraza" class="card-img">
                        <div class="restaurant-card-content">
                            <h3 class="card-title">La Terraza</h3>
                            <p class="card-description">Bar y restaurante al aire libre con música en vivo. Disfrute de cócteles artesanales y tapas mientras contempla el atardecer.</p>
                            <a href="#" class="card-button">Reservar Mesa</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de servicios y tours -->
        <section id="services" class="section">
            <div class="container">
                <h2 class="section-title">Servicios y Tours</h2>
                <p class="section-subtitle">Vive experiencias inolvidables durante tu estancia</p>
                <div class="slider">
                    <button class="slider-button prev">&#10094;</button>
                    <button class="slider-button next">&#10095;</button>
                    <div class="slider-container">
                        <div class="slider-card">
                            <img src="img/chachapoyas.jpg" alt="Tour por la ciudad" class="card-img">
                            <div class="restaurant-card-content">
                                <h3 class="card-title">Tour por la Ciudad</h3>
                                <p class="card-description">Descubra los secretos y la historia de Chachapoyas con nuestros guías expertos. Una experiencia cultural enriquecedora.</p>
                                <a href="#" class="card-button">Reservar Ahora</a>
                            </div>
                        </div>
                        <div class="slider-card">
                            <img src="img/kuelap.jpeg" alt="Excursión a Kuelap" class="card-img">
                            <div class="restaurant-card-content">
                                <h3 class="card-title">Excursión a Kuelap</h3>
                                <p class="card-description">Visite la impresionante fortaleza de Kuelap, conocida como el "Machu Picchu del norte". Una maravilla arqueológica que no puede perderse.</p>
                                <a href="#" class="card-button">Más Información</a>
                            </div>
                        </div>
                        <div class="slider-card">
                            <img src="img/gocta.jpeg" alt="Catarata de Gocta" class="card-img">
                            <div class="restaurant-card-content">
                                <h3 class="card-title">Catarata de Gocta</h3>
                                <p class="card-description">Aventúrese a una de las cataratas más altas del mundo. Una experiencia de senderismo y naturaleza inolvidable.</p>
                                <a href="#" class="card-button">Planear Aventura</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

     <!-- Modal para "¿Cómo llegar?" -->
     <div id="how-to-arrive-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>¿Cómo llegar?</h2>
            <p>Aquí puedes incluir las instrucciones para llegar al hotel o un mapa interactivo.</p>
            <!-- Puedes agregar un mapa de Google aquí si lo deseas -->
        </div>
    </div>

    <!-- Modal para "Contáctanos" -->
    <div id="contact-us-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Contáctanos</h2>
            <p>Puedes contactarnos a través de los siguientes medios o utilizar el formulario a continuación:</p>
            <ul>
                <li><i class="fas fa-phone"></i> +51 123 456 789</li>
                <li><i class="fas fa-envelope"></i> info@hospedajeelmirador.com</li>
                <li><i class="fas fa-map-marker-alt"></i> CHACHAPOYAS</li>
            </ul>
            <form id="contact-form" class="contact-form">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Enviar mensaje</button>
            </form>
        </div>
    </div>

    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="js/index.js"></script>
        <script src="js/desplegable-user.js"></script>
        <script src="js/precio.js"></script>
        <script>
             // Función para mostrar/ocultar el menú
            document.getElementById("menu-toggle").addEventListener("click", function () {
                document.querySelector(".sidebar").classList.toggle("show");
                document.querySelector(".sidebar-overlay").classList.toggle("show");
            });

            // Cerrar el menú al hacer clic en el botón de cerrar
            document.querySelector(".close-sidebar").addEventListener("click", function () {
                document.querySelector(".sidebar").classList.remove("show");
                document.querySelector(".sidebar-overlay").classList.remove("show");
            });

            // Cerrar el menú al hacer clic fuera de la barra lateral (en la superposición)
            document.querySelector(".sidebar-overlay").addEventListener("click", function () {
                document.querySelector(".sidebar").classList.remove("show");
                document.querySelector(".sidebar-overlay").classList.remove("show");
            });
        </script>

<script>
        // Scripts existentes...
  // Funcionalidad para el slider de servicios y tours
  const sliderContainer = document.querySelector('.slider-container');
        const prevButton = document.querySelector('.slider-button.prev');
        const nextButton = document.querySelector('.slider-button.next');
        let slideIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slider-card');
            if (index >= slides.length) slideIndex = 0;
            if (index < 0) slideIndex = slides.length - 1;
            
            const offset = -slideIndex * 100;
            sliderContainer.style.transform = `translateX(${offset}%)`;
        }

        prevButton.addEventListener('click', () => {
            slideIndex--;
            showSlide(slideIndex);
        });

        nextButton.addEventListener('click', () => {
            slideIndex++;
            showSlide(slideIndex);
        });

        // Responsive behavior
        function handleResize() {
            const width = window.innerWidth;
            if (width >= 1025) {
                sliderContainer.style.transform = 'translateX(0)';
            } else if (width >= 769 && width <= 1024) {
                sliderContainer.style.transform = 'translateX(0)';
            } else {
                showSlide(slideIndex);
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize(); // Initial call
    </script>
</body>
</html>
