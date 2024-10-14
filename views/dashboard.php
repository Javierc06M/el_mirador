<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profesional</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="dashboard">
        <header class="top-header">
                <div class="user-info">
                    <span id="user-name">Admin Usuario</span>
                    <img id="user-avatar" src="/api/placeholder/40/40" alt="Usuario" class="user-avatar">
                </div>
        </header>
        <div class="sidebar">
            <div class="sidebar-header">
                <i class="fas fa-home"></i>
                Dashboard
            </div>
            <nav>
                <div class="menu-item">
                    <button onclick="loadSection('reservaciones')">
                        <i class="far fa-calendar-alt"></i>
                        Reservaciones
                    </button>
                </div>
                <div class="menu-item">
                    <button onclick="loadSection('clientes')">
                        <i class="fas fa-users"></i>
                        Clientes
                    </button>
                </div>
                <div class="menu-item">
                    <button onclick="toggleSubmenu('servicios')">
                        <i class="fas fa-concierge-bell"></i>
                        Servicios
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </button>
                    <div class="submenu" id="servicios">
                        <a href="#" onclick="loadSection('restaurante')">Restaurante</a>
                        <a href="#" onclick="loadSection('tours')">Tours</a>
                        <a href="#" onclick="loadSection('habitaciones')">Habitaciones</a>
                    </div>
                </div>
                <div class="menu-item">
                    <button onclick="toggleSubmenu('informes')">
                        <i class="far fa-file-alt"></i>
                        Informes
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </button>
                    <div class="submenu" id="informes">
                        <a href="#" onclick="loadSection('informe-reservas')">Reservas</a>
                        <a href="#" onclick="loadSection('informe-clientes')">Clientes</a>
                        <a href="#" onclick="loadSection('informe-habitaciones')">Estado de Habitación</a>
                    </div>
                </div>
                <div class="menu-item">
                    <button onclick="toggleSubmenu('configuraciones')">
                        <i class="fas fa-cog"></i>
                        Configuraciones
                        <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                    </button>
                    <div class="submenu" id="configuraciones">
                        <a href="#" onclick="loadSection('config-habitaciones')">Habitaciones</a>
                        <a href="#" onclick="loadSection('config-clientes')">Clientes</a>
                        <a href="#" onclick="loadSection('config-usuarios')">Usuarios</a>
                        <a href="#" onclick="loadSection('config-servicios')">Servicios</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main-content" id="main-content">
            <h1>Bienvenido al Dashboard</h1>
            <p>Selecciona una opción del menú para comenzar a gestionar tu negocio.</p>
        </div>
    </div>
    <script src="js/dashboard.js"></script>
</body>
</html>