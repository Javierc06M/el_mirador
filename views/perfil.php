<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil - Hotel Paraíso</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --background-color: #f4f7f6;
            --text-color: #34495e;
            --card-bg: #ffffff;
            --card-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            background-color: rgba(44, 62, 80, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            display: flex;
            justify-content: flex-end;
            list-style-type: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
            padding: 5px 0;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--accent-color);
            transition: var(--transition);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        main {
            padding: 6rem 0 2rem;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 2rem;
        }

        .profile-sidebar {
            background-color: var(--card-bg);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            position: sticky;
            top: 100px;
            height: fit-content;
            transition: var(--transition);
        }

        .profile-sidebar:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .profile-picture {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .profile-picture:hover img {
            transform: scale(1.1);
        }

        .profile-picture::after {
            content: 'Cambiar foto';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 0.75rem;
            text-align: center;
            opacity: 0;
            transition: var(--transition);
        }

        .profile-picture:hover::after {
            opacity: 1;
        }

        .profile-name {
            text-align: center;
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .profile-member-since {
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .tab-buttons {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .tab-button {
            background-color: transparent;
            border: none;
            padding: 0.75rem 1rem;
            text-align: left;
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-color);
            cursor: pointer;
            transition: var(--transition);
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .tab-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-color: var(--secondary-color);
            transition: var(--transition);
            z-index: -1;
        }

        .tab-button:hover::before, .tab-button.active::before {
            left: 0;
        }

        .tab-button:hover, .tab-button.active {
            color: white;
        }

        .profile-content {
            background-color: var(--card-bg);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .profile-content:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .tab-content {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            transform: translateY(20px);
        }

        .tab-content.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        h2 {
            font-size: 2.25rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            position: relative;
            display: inline-block;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--primary-color);
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #bdc3c7;
            border-radius: 8px;
            font-size: 1rem;
            transition: var(--transition);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        button {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease-out, height 0.6s ease-out;
        }

        button:hover::before {
            width: 300px;
            height: 300px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
            margin-top: 1rem;
        }

        th, td {
            padding: 1rem;
            text-align: left;
        }

        th {
            background-color: #f9fafb;
            font-weight: 600;
            color: var(--primary-color);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        tbody tr {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        tbody tr:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .status {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-block;
        }

        .status-confirmed {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-pending {
            background-color: #fef3c7;
            color: #92400e;
        }

        .tours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .tour-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .tour-card::before {
            content: '';
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom right, var(--secondary-color), var(--accent-color));
            opacity: 0.1;
            transition: var(--transition);
        }

        .tour-card:hover {
            transform: translateY(-5px);
        }

        .tour-card:hover::before {
            top: 0;
        }

        .loyalty-info {
            background-color: #e0f2fe;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .loyalty-info::after {
            content: '🏆';
            position: absolute;
            top: -20px;
            right: -20px;
            font-size: 100px;
            opacity: 0.1;
            transform: rotate(15deg);
        }

        .progress-bar {
            background-color: #e5e7eb;
            border-radius: 9999px;
            height: 10px;
            overflow: hidden;
            margin: 1rem 0;
        }

        .progress-bar-fill {
            background-color: var(--secondary-color);
            height: 100%;
            width: 0;
            transition: width 1.5s ease-in-out;
        }

        footer {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .profile-grid {
                grid-template-columns: 1fr;
            }

            .profile-sidebar {
                position: static;
                margin-bottom: 2rem;
            }

            .profile-picture {
                width: 150px;
                height: 150px;
            }

            h2 {
                font-size: 2rem;
            }
        }

        /* New styles for enhanced design */
        .card {
            background-color: var(--card-bg);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            text-align: center;
            padding: 1rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .stat-label {
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        .activity-feed {
            max-height: 300px;
            overflow-y: auto;
            padding-right:  1rem;
        }

        .activity-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .activity-content {
            flex-grow: 1;
        }

        .activity-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .activity-date {
            font-size: 0.8rem;
            color: #7f8c8d;
        }

        /* Scrollbar styles */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <header id="main-header">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#" class="nav-link">Inicio</a></li>
                    <li><a href="#" class="nav-link">Reservaciones</a></li>
                    <li><a href="#" class="nav-link">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="profile-grid">
            <aside class="profile-sidebar">
                <div class="profile-picture">
                    <img src="https://yvqvxwjvxqvwxqvwxqvw.public.blob.vercel-storage.com/profile-placeholder-Rl5Rl5Rl5Rl5Rl5Rl5Rl.png" alt="Foto de perfil" id="profile-image">
                </div>
                <h1 class="profile-name">Juan Pérez</h1>
                <p class="profile-member-since">Miembro desde 2021</p>
                <div class="tab-buttons">
                    <button class="tab-button active" data-tab="dashboard">Dashboard</button>
                    <button class="tab-button" data-tab="personal-info">Información Personal</button>
                    <button class="tab-button" data-tab="reservations">Mis Reservaciones</button>
                    <button class="tab-button" data-tab="restaurant">Reservas de Restaurante</button>
                    <button class="tab-button" data-tab="tours">Tours Reservados</button>
                    <button class="tab-button" data-tab="loyalty">Programa de Lealtad</button>
                </div>
            </aside>
            <section class="profile-content">
                <div id="dashboard" class="tab-content active">
                    <h2>Dashboard</h2>
                    <div class="stats-grid">
                        <div class="card stat-card">
                            <div class="stat-value">5</div>
                            <div class="stat-label">Reservas Totales</div>
                        </div>
                        <div class="card stat-card">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Noches Reservadas</div>
                        </div>
                        <div class="card stat-card">
                            <div class="stat-value">5000</div>
                            <div class="stat-label">Puntos de Lealtad</div>
                        </div>
                    </div>
                    <div class="card">
                        <h3>Actividad Reciente</h3>
                        <div class="activity-feed">
                            <div class="activity-item">
                                <div class="activity-icon">🏨</div>
                                <div class="activity-content">
                                    <div class="activity-title">Reserva confirmada</div>
                                    <div class="activity-date">Hace 2 días</div>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">🍽️</div>
                                <div class="activity-content">
                                    <div class="activity-title">Reserva de restaurante</div>
                                    <div class="activity-date">Hace 1 semana</div>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon">🏆</div>
                                <div class="activity-content">
                                    <div class="activity-title">Nivel de lealtad aumentado</div>
                                    <div class="activity-date">Hace 2 semanas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="personal-info" class="tab-content">
                    <h2>Información Personal</h2>
                    <form id="personal-info-form">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name" value="Juan Pérez">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="juan.perez@example.com">
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="tel" id="phone" name="phone" value="+1 234 567 8900">
                            </div>
                            <div class="form-group">
                                <label for="address">Dirección</label>
                                <input type="text" id="address" name="address" value="123 Calle Principal, Ciudad">
                            </div>
                        </div>
                        <button type="submit">Actualizar Información</button>
                    </form>
                </div>
                <div id="reservations" class="tab-content">
                    <h2>Mis Reservaciones</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Fecha de Llegada</th>
                                <th>Fecha de Salida</th>
                                <th>Tipo de Habitación</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-07-15</td>
                                <td>2023-07-20</td>
                                <td>Suite Deluxe</td>
                                <td><span class="status status-confirmed">Confirmada</span></td>
                            </tr>
                            <tr>
                                <td>2023-09-01</td>
                                <td>2023-09-05</td>
                                <td>Habitación Estándar</td>
                                <td><span class="status status-pending">Pendiente</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="restaurant" class="tab-content">
                    <h2>Reservas de Restaurante</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Restaurante</th>
                                <th>Personas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-07-16</td>
                                <td>20:00</td>
                                <td>La Terraza</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>2023-07-18</td>
                                <td>19:30</td>
                                <td>El Jardín</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tours" class="tab-content">
                    <h2>Tours Reservados</h2>
                    <div class="tours-grid">
                        <div class="tour-card">
                            <h3>Tour por la Ciudad</h3>
                            <p>Fecha: 2023-07-17</p>
                            <p>Duración: 3 horas</p>
                            <p>Personas: 2</p>
                        </div>
                        <div class="tour-card">
                            <h3>Excursión a la Playa</h3>
                            <p>Fecha: 2023-07-19</p>
                            <p>Duración: 6 horas</p>
                            <p>Personas: 2</p>
                        </div>
                    </div>
                </div>
                <div id="loyalty" class="tab-content">
                    <h2>Programa de Lealtad</h2>
                    <div class="loyalty-info">
                        <h3>Nivel Actual: Oro</h3>
                        <p>Puntos acumulados: 5,000</p>
                        <p>Próximo nivel: Platino (7,500 puntos)</p>
                    </div>
                    <h3>Progreso hacia el siguiente nivel</h3>
                    <div class="progress-bar">
                        <div class="progress-bar-fill" id="loyalty-progress"></div>
                    </div>
                    <h3>Historial de Puntos</h3>
                    <canvas id="pointsChart" width="400" height="200"></canvas>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Hotel Paraíso. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            const header = document.getElementById('main-header');
            const profileImage = document.getElementById('profile-image');

            function switchTab(tabId) {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    content.style.display = 'none';
                });

                const activeButton = document.querySelector(`.tab-button[data-tab="${tabId}"]`);
                const activeContent = document.getElementById(tabId);

                activeButton.classList.add('active');
                activeContent.style.display = 'block';
                setTimeout(() => {
                    activeContent.classList.add('active');
                }, 50);

                if (tabId === 'loyalty') {
                    animateProgressBar();
                    initChart();
                }
            }

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tabId = button.getAttribute('data-tab');
                    switchTab(tabId);
                });
            });

            function animateProgressBar() {
                const progressBar = document.getElementById('loyalty-progress');
                progressBar.style.width = '66%';
            }

            function initChart() {
                const ctx = document.getElementById('pointsChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                        datasets: [{
                            label: 'Puntos Ganados',
                            data: [500, 1000, 1500, 2500, 3500, 5000],
                            borderColor: '#3498db',
                            backgroundColor: 'rgba(52, 152, 219, 0.1)',
                            tension: 0.4,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        animation: {
                            duration: 2000,
                            easing: 'easeOutQuart'
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            }

            document.getElementById('personal-info-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Información actualizada correctamente');
            });

            profileImage.addEventListener('click', () => {
                alert('Funcionalidad para cambiar la foto de perfil');
            });

            // Parallax effect for profile picture
            window.addEventListener('scroll', () => {
                const scrollPosition = window.scrollY;
                profileImage.style.transform = `translateY(${scrollPosition * 0.1}px)`;
            });

            // Header scroll effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Initialize with the dashboard tab
            switchTab('dashboard');

            // Add hover effect to table rows
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.transform = 'scale(1.02)';
                });
                row.addEventListener('mouseleave', () => {
                    row.style.transform = 'scale(1)';
                });
            });

            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    let ripple = document.createElement('span');
                    ripple.classList.add('ripple');
                    this.appendChild(ripple);
                    let x = e.clientX - e.target.offsetLeft;
                    let y = e.clientY - e.target.offsetTop;
                    ripple.style.left = `${x}px`;
                    ripple.style.top = `${y}px`;
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Smooth scroll to top when switching tabs
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });

            // Animate stats on dashboard
            function animateStats() {
                const stats = document.querySelectorAll('.stat-value');
                stats.forEach(stat => {
                    const finalValue = parseInt(stat.textContent);
                    let currentValue = 0;
                    const duration = 2000; // 2 segundos
                    const interval = 50; // Actualizar cada 50ms
                    const steps = duration / interval;
                    const increment = finalValue / steps;

                    const timer = setInterval(() => { // Corregido a setInterval
                        currentValue += increment;
                        if (currentValue >= finalValue) {
                            clearInterval(timer);
                            stat.textContent = finalValue;
                        } else {
                            stat.textContent = Math.round(currentValue);
                        }
                    }, interval);
                });
            }

            // Call animateStats when dashboard is shown
            document.querySelector('.tab-button[data-tab="dashboard"]').addEventListener('click', animateStats);

            // Initial animation for dashboard stats
            animateStats();
        });
    </script>
</body>
</html>