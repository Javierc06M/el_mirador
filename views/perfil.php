<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil - Estilo GitHub</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        :root {
            --color-canvas-default: #ffffff;
            --color-canvas-subtle: #f6f8fa;
            --color-border-default: #d0d7de;
            --color-fg-default: #24292f;
            --color-fg-muted: #57606a;
            --color-accent-fg: #0969da;
            --color-accent-emphasis: #0969da;
            --color-success-fg: #1a7f37;
            --color-danger-fg: #cf222e;
            --color-btn-primary-bg: #2da44e;
            --color-btn-primary-hover-bg: #2c974b;
            --color-btn-primary-text: #ffffff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Noto Sans', Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: var(--color-fg-default);
            background-color: var(--color-canvas-default);
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 16px;
        }

        header {
            background-color: var(--color-canvas-default);
            border-bottom: 1px solid var(--color-border-default);
            padding: 16px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-nav {
            display: flex;
            gap: 16px;
        }

        .profile-nav a {
            color: var(--color-fg-default);
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 6px;
        }

        .profile-nav a:hover, .profile-nav a.active {
            color: var(--color-accent-fg);
            background-color: var(--color-canvas-subtle);
        }

        main {
            padding: 24px 0;
        }

        .profile-layout {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 24px;
        }

        .profile-sidebar {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .profile-avatar {
            width: 100%;
            max-width: 296px;
            border-radius: 50%;
        }

        .profile-info h1 {
            font-size: 24px;
            font-weight: 600;
            line-height: 1.25;
            margin-bottom: 8px;
        }

        .profile-info .username {
            font-size: 20px;
            font-weight: 300;
            line-height: 24px;
            color: var(--color-fg-muted);
        }

        .profile-details {
            margin-top: 16px;
        }

        .profile-details p {
            display: flex;
            align-items: center;
            margin-bottom: 4px;
        }

        .profile-details i {
            margin-right: 8px;
            width: 16px;
            color: var(--color-fg-muted);
        }

        .tab-content {
            background-color: var(--color-canvas-subtle);
            border: 1px solid var(--color-border-default);
            border-radius: 6px;
            padding: 16px;
        }

        .card {
            background-color: var(--color-canvas-default);
            border: 1px solid var(--color-border-default);
            border-radius: 6px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .card h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .card-item {
            padding: 8px 0;
            border-bottom: 1px solid var(--color-border-default);
        }

        .card-item:last-child {
            border-bottom: none;
        }

        .hidden {
            display: none;
        }

        .btn {
            display: inline-block;
            padding: 5px 16px;
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            border: 1px solid;
            border-radius: 6px;
            appearance: none;
            text-decoration: none;
        }

        .btn-primary {
            color: var(--color-btn-primary-text);
            background-color: var(--color-btn-primary-bg);
            border-color: var(--color-btn-primary-bg);
        }

        .btn-primary:hover {
            background-color: var(--color-btn-primary-hover-bg);
            border-color: var(--color-btn-primary-hover-bg);
        }

        .edit-form {
            margin-top: 16px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            margin-bottom: 4px;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 5px 12px;
            font-size: 14px;
            line-height: 20px;
            color: var(--color-fg-default);
            background-color: var(--color-canvas-default);
            background-repeat: no-repeat;
            background-position: right 8px center;
            border: 1px solid var(--color-border-default);
            border-radius: 6px;
            outline: none;
            box-shadow: inset 0 1px 0 rgba(208,215,222,0.2);
        }

        @media (max-width: 768px) {
            .profile-layout {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <h1>Mi Perfil</h1>
            <nav class="profile-nav">
                <a href="#reservations" class="nav-link active" data-target="reservations">Reservaciones</a>
                <a href="#orders" class="nav-link" data-target="orders">Pedidos</a>
                <a href="#adventures" class="nav-link" data-target="adventures">Aventuras</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="profile-layout">
            <aside class="profile-sidebar">
                <img src="/api/placeholder/296/296" alt="Avatar" class="profile-avatar">
                <div class="profile-info">
                    <h1 id="nombre-completo"></h1>
                    <div class="username" id="usuario"></div>
                    <div class="profile-details">
                        <p><i class="fas fa-phone"></i> <span id="celular"></span></p>
                        <p><i class="fas fa-map-marker-alt"></i> <span id="direccion"></span></p>
                        <p><i class="fas fa-envelope"></i> <span id="correo"></span></p>
                    </div>
                    <button id="editarPerfil" class="btn btn-primary">Editar Perfil</button>
                </div>
                <div id="editForm" class="edit-form hidden">
                    <h3>Editar Perfil</h3>
                    <form id="profileForm">
                        <div class="form-group">
                            <label for="editNombre">Nombre:</label>
                            <input type="text" id="editNombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="editApellidos">Apellidos:</label>
                            <input type="text" id="editApellidos" name="apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="editCelular">Celular:</label>
                            <input type="tel" id="editCelular" name="celular" required>
                        </div>
                        <div class="form-group">
                            <label for="editDireccion">Dirección:</label>
                            <input type="text" id="editDireccion" name="direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="editUsuario">Usuario:</label>
                            <input type="text" id="editUsuario" name="usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="editCorreo">Correo:</label>
                            <input type="email" id="editCorreo" name="correo" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </aside>

            <div class="tab-content">
                <section id="reservations" class="card">
                    <h3>Mis Reservaciones</h3>
                    <div id="reservaciones"></div>
                </section>

                <section id="orders" class="card hidden">
                    <h3>Mis Pedidos de Comida</h3>
                    <div id="pedidos"></div>
                </section>

                <section id="adventures" class="card hidden">
                    <h3>Mis Aventuras</h3>
                    <div id="aventuras"></div>
                </section>
            </div>
        </div>
    </main>

    <script>
          // Datos de ejemplo (reemplazar con datos reales)
          let perfil = {
            nombre: "Juan",
            apellidos: "Pérez González",
            celular: "+1234567890",
            direccion: "Ciudad, País",
            usuario: "juanpg",
            correo: "juan@example.com"
        };

        const reservaciones = [
            { id: 1, fecha: "2024-05-15", habitacion: "Suite Deluxe", noches: 3 },
            { id: 2, fecha: "2024-06-20", habitacion: "Habitación Doble", noches: 2 }
        ];

        const pedidos = [
            { id: 1, fecha: "2024-05-16", plato: "Pasta Alfredo", precio: 15.99 },
            { id: 2, fecha: "2024-05-17", plato: "Ensalada César", precio: 10.50 }
        ];

        const aventuras = [
            { id: 1, fecha: "2024-05-18", nombre: "Tour por la ciudad", estado: "Completado" },
            { id: 2, fecha: "2024-06-21", nombre: "Excursión a la montaña", estado: "Reservado" }
        ];

        // Función para llenar la información del perfil
        function llenarPerfil() {
            document.getElementById('nombre-completo').textContent = `${perfil.nombre} ${perfil.apellidos}`;
            document.getElementById('usuario').textContent = `@${perfil.usuario}`;
            document.getElementById('celular').textContent = perfil.celular;
            document.getElementById('direccion').textContent = perfil.direccion;
            document.getElementById('correo').textContent = perfil.correo;
        }

        // Función para crear elementos de card
        function crearElementoCard(item, tipo) {
            const elemento = document.createElement('div');
            elemento.classList.add('card-item');
            let contenido = '';

            switch (tipo) {
                case 'reservacion':
                    contenido = `<strong>Reserva #${item.id}:</strong> ${item.habitacion} - ${item.fecha} (${item.noches} noches)`;
                    break;
                case 'pedido':
                    contenido = `<strong>Pedido #${item.id}:</strong> ${item.plato} - $${item.precio.toFixed(2)} (${item.fecha})`;
                    break;
                case 'aventura':
                    contenido = `<strong>Aventura #${item.id}:</strong> ${item.nombre} - ${item.fecha} (${item.estado})`;
                    break;
            }

            elemento.innerHTML = contenido;
            return elemento;
        }

        // Función para llenar las secciones de cards
        function llenarCards() {
            const seccionReservaciones = document.getElementById('reservaciones');
            const seccionPedidos = document.getElementById('pedidos');
            const seccionAventuras = document.getElementById('aventuras');

            seccionReservaciones.innerHTML = '';
            seccionPedidos.innerHTML = '';
            seccionAventuras.innerHTML = '';

            reservaciones.forEach(res => seccionReservaciones.appendChild(crearElementoCard(res, 'reservacion')));
            pedidos.forEach(ped => seccionPedidos.appendChild(crearElementoCard(ped, 'pedido')));
            aventuras.forEach(adv => seccionAventuras.appendChild(crearElementoCard(adv, 'aventura')));
        }

        // Función para cambiar entre pestañas
        function cambiarPestana(targetId) {
            document.querySelectorAll('.card').forEach(section => {
                section.classList.add('hidden');
            });
            document.getElementById(targetId).classList.remove('hidden');

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`.nav-link[data-target="${targetId}"]`).classList.add('active');
        }

        // Función para mostrar el formulario de edición
        function mostrarFormularioEdicion() {
            const form = document.getElementById('editForm');
            form.classList.remove('hidden');
            
            // Rellenar el formulario con los datos actuales
            document.getElementById('editNombre').value = perfil.nombre;
            document.getElementById('editApellidos').value = perfil.apellidos;
            document.getElementById('editCelular').value = perfil.celular;
            document.getElementById('editDireccion').value = perfil.direccion;
            document.getElementById('editUsuario').value = perfil.usuario;
            document.getElementById('editCorreo').value = perfil.correo;
        }

        // Función para ocultar el formulario de edición
        function ocultarFormularioEdicion() {
            const form = document.getElementById('editForm');
            form.classList.add('hidden');
        }

        // Función para guardar los cambios del perfil
        function guardarCambiosPerfil(event) {
            event.preventDefault();
            
            perfil = {
                nombre: document.getElementById('editNombre').value,
                apellidos: document.getElementById('editApellidos').value,
                celular: document.getElementById('editCelular').value,
                direccion: document.getElementById('editDireccion').value,
                usuario: document.getElementById('editUsuario').value,
                correo: document.getElementById('editCorreo').value
            };

            llenarPerfil();
            ocultarFormularioEdicion();

            // Aquí se podría agregar código para enviar los datos actualizados al servidor
            console.log("Perfil actualizado:", perfil);
        }

        // Inicializar la página
        document.addEventListener('DOMContentLoaded', () => {
            llenarPerfil();
            llenarCards();

            // Agregar event listeners para los enlaces de navegación
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = e.target.getAttribute('data-target');
                    cambiarPestana(targetId);
                });
            });

            // Agregar event listener para el botón de editar perfil
            document.getElementById('editarPerfil').addEventListener('click', mostrarFormularioEdicion);

            // Agregar event listener para el formulario de edición
            document.getElementById('profileForm').addEventListener('submit', guardarCambiosPerfil);
        });
    </script>

</body>
</html>