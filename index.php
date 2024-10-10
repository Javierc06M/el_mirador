<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/desplegable.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Etiquetas flotantes -->
    <div class="floating-tags">
        <div class="floating-tag" id="how-to-arrive">
            <i class="fas fa-map-marker-alt"></i>
            <span>¿Cómo llegar?</span>
        </div>
        <div class="floating-tag" id="contact-us">
            <i class="fas fa-envelope"></i>
            <span>Contáctanos</span>
        </div>
    </div>

    <header>
    <div class="container">
        <div class="logo">
            <img src="" alt="Hospedaje El Mirador" class="logo-img">
        </div>
        <?php session_start(); // Asegúrate de iniciar la sesión ?>
        
        <?php if (isset($_SESSION['usuario'])): ?>
            <nav class="nav">
                <a href="#" class="nav-item"><i class="fas fa-heart"></i> <span>Favoritos</span></a>
                <a href="#" class="nav-item"><i class="fas fa-globe"></i> <span>ES · S/.</span></a>
                
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

                <button class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <span>Menú</span>
                </button>
            </nav>
        <?php else: ?>
            <nav class="nav">
                <a href="#" class="nav-item"><i class="fas fa-heart"></i> <span>Favoritos</span></a>
                <a href="#" class="nav-item"><i class="fas fa-globe"></i> <span>ES · S/.</span></a>
                <a href="login-register.php" class="nav-item"><i class="fas fa-user"></i> <span>Iniciar sesión</span></a>
            </nav>
        <?php endif; ?>
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
        <div class="filter-section">
            <button class="filter-btn active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="grupales">Grupales</button>
            <button class="filter-btn" data-filter="simples">Simples</button>
            <button class="filter-btn" data-filter="dobles">Dobles</button>
            <button class="filter-btn" data-filter="matrimoniales">Matrimoniales</button>
        </div>
    
        <div class="container">
            <div class="card grupales">
                <img src="img/room1.avif" alt="Habitación Grupal" class="card-img">
                <div class="card-content">
                    <h2>Habitación Deluxe</h2>
                    <p>Una habitación cómoda con vista al mar, cama king-size, wifi gratuito, y desayuno incluido.</p>
                    <ul>
                        <li><i class="fas fa-bed"></i> 1 Cama King-size</li>
                        <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                        <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                        <li><i class="fas fa-tv"></i> TV de 50''</li>
                    </ul>
                    <div class="price">
                        <span>S/ 350.00</span>
                        <button class="book-now">Reservar</button>
                    </div>
                </div>
            </div>
            
    
            <div class="card simples">
                <img src="img/room2.jpg" alt="Habitación Simple" class="card-img">
                <div class="card-content">
                    <h2>Habitación Deluxe</h2>
                    <p>Una habitación cómoda con vista al mar, cama king-size, wifi gratuito, y desayuno incluido.</p>
                    <ul>
                        <li><i class="fas fa-bed"></i> 1 Cama King-size</li>
                        <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                        <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                        <li><i class="fas fa-tv"></i> TV de 50''</li>
                    </ul>
                    <div class="price">
                        <span>S/ 350.00</span>
                        <button class="book-now">Reservar</button>
                    </div>
                </div>
            </div>
    
            <div class="card dobles">
                <img src="img/room3.avif" alt="Habitación Doble" class="card-img">
                <div class="card-content">
                    <h2>Habitación Deluxe</h2>
                    <p>Una habitación cómoda con vista al mar, cama king-size, wifi gratuito, y desayuno incluido.</p>
                    <ul>
                        <li><i class="fas fa-bed"></i> 1 Cama King-size</li>
                        <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                        <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                        <li><i class="fas fa-tv"></i> TV de 50''</li>
                    </ul>
                    <div class="price">
                        <span>S/ 350.00</span>
                        <button class="book-now">Reservar</button>
                    </div>
                </div>
            </div>
    
            <div class="card matrimoniales">
                <img src="img/room4.jpg" alt="Habitación Matrimonial" class="card-img">
                <div class="card-content">
                    <h2>Habitación Deluxe</h2>
                    <p>Una habitación cómoda con vista al mar, cama king-size, wifi gratuito, y desayuno incluido.</p>
                    <ul>
                        <li><i class="fas fa-bed"></i> 1 Cama King-size</li>
                        <li><i class="fas fa-wifi"></i> Wifi gratuito</li>
                        <li><i class="fas fa-coffee"></i> Desayuno incluido</li>
                        <li><i class="fas fa-tv"></i> TV de 50''</li>
                    </ul>
                    <div class="price">
                        <span>S/ 350.00</span>
                        <button class="book-now">Reservar</button>
                    </div>
                </div>
            </div>
        </div>

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
    </main>

</body>
</html>
