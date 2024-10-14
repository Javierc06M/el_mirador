<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedaje El Mirador - Restaurante </title>
    <link rel="stylesheet" href="style/restaurante.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="" alt="El Mirador">
                <h1>HOSPEDAJE</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#menu">Menú</a></li>
                <li><a href="#reservas">Reservas</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero">
            <h2>Restaurante El Mirador</h2>
            <p>Descubre la auténtica cocina De Chachapoyas en el corazón de la ciudad</p>
            <a href="#menu" class="cta-button">Ver Menú</a>
        </section>

        <section id="menu" class="menu">
            <h2>Nuestro Menú</h2>
            <div class="menu-categories">
                <button class="category-btn active" data-category="all">Todos</button>
                <button class="category-btn" data-category="entradas">Entradas</button>
                <button class="category-btn" data-category="platos">Platos</button>
                <button class="category-btn" data-category="postres">Postres</button>
            </div>
            <!-- Campo de búsqueda -->
            <div class="menu-search">
                <input type="text" id="menu-search" placeholder="Buscar plato...">
            </div>
            <div class="menu-items">
                <!-- Los elementos del menú se cargarán dinámicamente con JavaScript -->
            </div>
        </section>

        <section id="reservas" class="reservations">
            <h2>Haz tu Reserva</h2>
            <form id="reservation-form">
                <input type="text" name="name" placeholder="Nombre" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Teléfono" required>
                <input type="date" name="date" required>
                <input type="time" name="time" required>
                <input type="number" name="guests" placeholder="Número de comensales" min="1" max="10" required>
                <textarea name="message" placeholder="Mensaje (opcional)"></textarea>
                <button type="submit">Reservar</button>
            </form>
        </section>

        <section id="sobre-nosotros" class="about-us">
            <h2>Sobre Nosotros</h2>
            <div class="about-content">
                <img src="/placeholder.svg?height=300&width=400" alt="Interior del restaurante">
                <div class="about-text">
                    <p></p>
                    <p></p>
                </div>
            </div>
        </section>

        <section id="contacto" class="contact">
            <h2>Contacto</h2>
            <div class="contact-info">
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Calle Principal 123, Chachapoyas</p>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <p>+51 123 456 789</p>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <p>info@elmirador.com.pe</p>
                </div>
            </div>
            <div class="social-media">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 El Mirador Chachapoyas. Todos los derechos reservados.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    // Navegación responsive
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        // Toggle Nav
        nav.classList.toggle('nav-active');

        // Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

        // Burger Animation
        burger.classList.toggle('toggle');
    });

    // Filtrado del menú y búsqueda
    const menuItems = [
    { name: 'Ceviche', category: 'entradas', price: 25, image: './img/ceviche.jpg?height=200&width=300', description: 'Pescado crudo marinado en jugo de limón con cebolla y ají.' },
    { name: 'Papa a la Huancaína', category: 'entradas', price: 15, image: './img/huancaina.jpg?height=200&width=300', description: 'Papas sancochadas con crema de ají amarillo y queso fresco.' },
    { name: 'Ají de Gallina', category: 'platos', price: 20, image: './img/aji.jpg?height=200&width=300', description: 'Pollo deshilachado en crema de ají amarillo y nueces.' },
    { name: 'Lomo Saltado', category: 'platos', price: 28, image: './img/lomo.jpeg?height=200&width=300', description: 'Salteado de carne con cebolla, tomate y papas fritas.' },
    { name: 'Causa Limeña', category: 'entradas', price: 18, image: './img/causa.jpg?height=200&width=300', description: 'Puré de papas amarillas con relleno de atún o pollo.' },
    { name: 'Anticuchos', category: 'platos', price: 22, image: './img/Anticuchos.jpg?height=200&width=300', description: 'Brochetas de corazón de res marinadas con ají panca.' },
    { name: 'Mazamorra Morada', category: 'postres', price: 10, image: './img/mazamorra.jpg?height=200&width=300', description: 'Postre de maíz morado con frutas.' },
    { name: 'Picarones', category: 'postres', price: 12, image: './img/picarones.avif?height=200&width=300', description: 'Dulces fritos hechos de zapallo y camote, con miel de chancaca.' },
];
    const menuContainer = document.querySelector('.menu-items');
    const categoryButtons = document.querySelectorAll('.category-btn');
    const searchInput = document.getElementById('menu-search');

    function displayMenuItems(items) {
        menuContainer.innerHTML = items.map(item => `
            <div class="menu-item">
                <img src="${item.image}" alt="${item.name}">
                <div class="menu-item-info">
                    <h3>${item.name}</h3>
                    <p>${item.description}</p>
                    <span class="price">S/${item.price.toFixed(2)}</span>
                </div>
            </div>
        `).join('');
    }

    function filterMenu(category) {
        let filteredItems = menuItems;
        if (category !== 'all') {
            filteredItems = menuItems.filter(item => item.category === category);
        }
        displayMenuItems(filteredItems);
    }

    // Filtrar por categoría
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            const category = button.getAttribute('data-category');
            filterMenu(category);
        });
    });

    // Funcionalidad de búsqueda
    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        const filteredItems = menuItems.filter(item => item.name.toLowerCase().includes(searchTerm));
        displayMenuItems(filteredItems);
    });

    // Mostrar todos los elementos del menú al cargar la página
    displayMenuItems(menuItems);
});

    </script>
</body>
</html>