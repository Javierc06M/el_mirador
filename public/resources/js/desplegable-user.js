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