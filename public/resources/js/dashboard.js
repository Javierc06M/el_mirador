function toggleSubmenu(id) {
    var submenu = document.getElementById(id);
    if (submenu.style.display === "block") {
        submenu.style.display = "none";
    } else {
        submenu.style.display = "block";
    }
}

function loadSection(sectionName) {
    var mainContent = document.getElementById('main-content');
    var content = '';

    switch(sectionName) {
        case 'reservaciones':
            content = `
                <h1>Reservaciones</h1>
                <div class="section">
                    <h2>Gestión de Reservas</h2>
                    <p>Aquí puedes ver y administrar todas las reservaciones.</p>
                    <!-- Añadir formulario o tabla de reservaciones -->
                </div>
            `;
            break;
        case 'clientes':
            content = `
                <h1>Clientes</h1>
                <div class="section">
                    <h2>Información de Clientes</h2>
                    <p>Gestiona la información de tus clientes aquí.</p>
                    <!-- Añadir lista o tabla de clientes -->
                </div>
            `;
            break;
        case 'restaurante':
            content = `
                <h1>Servicio de Restaurante</h1>
                <div class="section">
                    <h2>Menú y Reservas</h2>
                    <p>Administra el menú y las reservas del restaurante.</p>
                    <!-- Añadir formulario de gestión de menú y reservas -->
                </div>
            `;
            break;
        case 'tours':
            content = `
                <h1>Servicio de Tours</h1>
                <div class="section">
                    <h2>Gestión de Tours</h2>
                    <p>Organiza y administra los tours disponibles.</p>
                    <!-- Añadir lista de tours y formulario de creación -->
                </div>
            `;
            break;
        case 'habitaciones':
            content = `
                <h1>Servicio de Habitaciones</h1>
                <div class="section">
                    <h2>Estado de Habitaciones</h2>
                    <p>Revisa y actualiza el estado de las habitaciones.</p>
                    <!-- Añadir grid o tabla de habitaciones -->
                </div>
            `;
            break;
        case 'informe-reservas':
            content = `
                <h1>Informe de Reservas</h1>
                <div class="section">
                    <h2>Estadísticas de Reservas</h2>
                    <p>Visualiza las estadísticas y tendencias de reservas.</p>
                    <!-- Añadir gráficos o tablas de estadísticas -->
                </div>
            `;
            break;
        case 'informe-clientes':
            content = `
                <h1>Informe de Clientes</h1>
                <div class="section">
                    <h2>Análisis de Clientes</h2>
                    <p>Revisa los datos y tendencias de tus clientes.</p>
                    <!-- Añadir gráficos o tablas de análisis de clientes -->
                </div>
            `;
            break;
        case 'informe-habitaciones':
            content = `
                <h1>Informe de Estado de Habitaciones</h1>
                <div class="section">
                    <h2>Ocupación y Mantenimiento</h2>
                    <p>Analiza la ocupación y el estado de mantenimiento de las habitaciones.</p>
                    <!-- Añadir gráficos o tablas de estado de habitaciones -->
                </div>
            `;
            break;
        case 'config-habitaciones':
            content = `
                <h1>Configuración de Habitaciones</h1>
                <div class="section">
                    <h2>Gestión de Habitaciones</h2>
                    <p>Configura los tipos y características de las habitaciones.</p>
                    <!-- Añadir formulario de configuración de habitaciones -->
                </div>
            `;
            break;
        case 'config-clientes':
            content = `
                <h1>Configuración de Clientes</h1>
                <div class="section">
                    <h2>Preferencias de Clientes</h2>
                    <p>Configura las opciones y preferencias para los clientes.</p>
                    <!-- Añadir formulario de configuración de clientes -->
                </div>
            `;
            break;
        case 'config-usuarios':
            content = `
                <h1>Configuración de Usuarios</h1>
                <div class="section">
                    <h2>Gestión de Usuarios del Sistema</h2>
                    <p>Administra los usuarios y sus permisos en el sistema.</p>
                    <!-- Añadir formulario de gestión de usuarios -->
                </div>
            `;
            break;
        case 'config-servicios':
            content = `
                <h1>Configuración de Servicios</h1>
                <div class="section">
                    <h2>Gestión de Servicios Ofrecidos</h2>
                    <p>Configura los servicios disponibles en tu negocio.</p>
                    <!-- Añadir formulario de configuración de servicios -->
                </div>
            `;
            break;
        default:
            content = `
                <h1>Bienvenido al Dashboard</h1>
                <p>Selecciona una opción del menú para comenzar a gestionar tu negocio.</p>
            `;
    }

    mainContent.innerHTML = content;
}

function loadUserInfo() {
    // Aquí normalmente harías una petición al servidor para obtener la información del usuario
    // Por ahora, simularemos esto con datos estáticos
    const userName = "Admin Usuario";
    const userAvatarUrl = "/api/placeholder/40/40"; // URL de placeholder para la imagen

    document.getElementById('user-name').textContent = userName;
    document.getElementById('user-avatar').src = userAvatarUrl;
}

// Llamar a loadUserInfo cuando se carga la página
window.addEventListener('load', loadUserInfo);