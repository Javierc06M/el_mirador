document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');
    const openSidebarButton = document.querySelector('.open-sidebar');
    const closeSidebarButton = document.querySelector('.close-sidebar');

    // Función para abrir el menú
    const openSidebar = () => {
        sidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
    };

    // Función para cerrar el menú
    const closeSidebar = () => {
        sidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
    };

    // Evento para abrir el menú al hacer clic en el botón de abrir
    openSidebarButton.addEventListener('click', openSidebar);

    // Evento para cerrar el menú al hacer clic en el botón de cerrar
    closeSidebarButton.addEventListener('click', closeSidebar);

    // Evento para cerrar el menú al hacer clic fuera del menú (en la superposición)
    sidebarOverlay.addEventListener('click', closeSidebar);
});
