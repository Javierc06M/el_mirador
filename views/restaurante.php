<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedaje El Mirador - Restaurante </title>
    <link rel="stylesheet" href="<?php echo $url .'public/resources/css/restaurante.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <img src="/placeholder.svg?height=50&width=50" alt="El Mirador">
                    <h1>El Mirador</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="#menu">Menú</a></li>
                    <li><a href="#reservas">Reservas</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="menu" class="menu">
            <div class="container">
                <h2>Nuestra Carta</h2>
                <div class="menu-categories">
                    <button class="category-btn active" data-category="all">Todos</button>
                    <button class="category-btn" data-category="entradas">Entradas</button>
                    <button class="category-btn" data-category="platos">Platos Principales</button>
                    <button class="category-btn" data-category="postres">Postres</button>
                </div>
                <div class="menu-items">
                    <div class="menu-item" data-category="entradas">
                        <img src="<?php echo $url .'public/resources/img/ceviche.jpg' ?>" alt="Ceviche de Trucha">
                        <div class="menu-item-content">
                            <h3>Ceviche de Trucha</h3>
                            <p>Trucha fresca marinada en limón con cebolla, cilantro y ají.</p>
                            <span class="price">S/ 25.00</span>
                            <a href="#" class="order-btn">Ordenar</a>
                        </div>
                    </div>
                    <div class="menu-item" data-category="entradas">
                        <img src="<?php echo $url .'public/resources/img/aji.jpg' ?>" alt="Sopa de Gallina">
                        <div class="menu-item-content">
                            <h3>Aji De Gallina</h3>
                            <p>Caldo casero con gallina de corral, verduras y fideos.</p>
                            <span class="price">S/ 20.00</span>
                            <a href="#" class="order-btn">Ordenar</a>
                        </div>
                    </div>
                    <div class="menu-item" data-category="platos">
                        <img src="<?php echo $url .'public/resources/img/lomo.jpeg' ?>" alt="Cecina con Tacacho">
                        <div class="menu-item-content">
                            <h3>Lomo Saltado</h3>
                            <p>Carne de cerdo seca acompañada de plátano machacado.</p>
                            <span class="price">S/ 35.00</span>
                            <a href="#" class="order-btn">Ordenar</a>
                        </div>
                    </div>
                    <div class="menu-item" data-category="platos">
                        <img src="<?php echo $url .'public/resources/img/huancaina.jpg' ?>" alt="Juane">
                        <div class="menu-item-content">
                            <h3>Papa A La Huancaina</h3>
                            <p>Arroz con pollo envuelto en hoja de bijao, típico de la selva.</p>
                            <span class="price">S/ 30.00</span>
                            <a href="#" class="order-btn">Ordenar</a>
                        </div>
                    </div>
                    <div class="menu-item" data-category="postres">
                        <img src="<?php echo $url .'public/resources/img/mazamorra.jpg' ?>" alt="Helado de Aguaje">
                        <div class="menu-item-content">
                            <h3>Mazamorra</h3>
                            <p>Helado artesanal hecho con fruta de aguaje.</p>
                            <span class="price">S/ 15.00</span>
                            <a href="#" class="order-btn">Ordenar</a>
                        </div>
                    </div>
                    <div class="menu-item" data-category="postres">
                        <img src="<?php echo $url .'public/resources/img/coffe.jpeg' ?>" alt="Mazamorra de Calabaza">
                        <div class="menu-item-content">
                            <h3>Cafe</h3>
                            <p>Postre tradicional a base de calabaza y leche.</p>
                            <span class="price">S/ 12.00</span>
                            <a href="#" class="order-btn">Ordenar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 El Mirador Chachapoyas. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="<?php echo $url .'public/resources/js/restaurante.js' ?>"></script>
</body>
</html>