document.addEventListener('DOMContentLoaded', () => {
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.nav-links');

    navbarToggle.addEventListener('click', () => {
        navbarMenu.classList.toggle('show');
    });

    // Función para mostrar información sobre un destino
    function showDestinationInfo(destinationId) {
        const destinationCard = document.getElementById(`destination-${destinationId}`);
        const infoModal = document.createElement('div');
        infoModal.className = 'info-modal';
        infoModal.innerHTML = `
            <h2>${destinationCard.querySelector('.destination-content h3').textContent}</h2>
            <p>${destinationCard.querySelector('.destination-content p').textContent}</p>
            <span class="price">${destinationCard.querySelector('.price').textContent}</span>
            <button class="book-button">Reserva ahora</button>
        `;
        document.body.appendChild(infoModal);

        // Ocultar modal al hacer clic fuera de ella
        window.addEventListener('click', (event) => {
            if (!event.target.closest('.info-modal')) {
                infoModal.remove();
            }
        });

        // Event listener para cerrar modal
        document.querySelector('.info-modal button').addEventListener('click', () => {
            infoModal.remove();
        });
    }

    // Event listeners para mostrar información de destinos
    document.querySelectorAll('.destination-card').forEach((card, index) => {
        card.addEventListener('click', () => {
            showDestinationInfo(index);
        });
    });
});


 // Toggle User Menu Dropdown
 const toggleUserMenu = document.querySelector('.toggle-user-menu');
 const userDropdown = document.querySelector('.user-dropdown');

 toggleUserMenu.addEventListener('click', () => {
     userDropdown.classList.toggle('active');
     userDropdown.style.display = userDropdown.style.display === 'block' ? 'none' : 'block';
 });

 // Close user dropdown if clicking outside
 document.addEventListener('click', (event) => {
     if (!toggleUserMenu.contains(event.target) && !userDropdown.contains(event.target)) {
         userDropdown.style.display = 'none';
     }
 });

 // Responsive Menu Toggle
 const menuToggle = document.querySelector('.menu-toggle');
 const navLinks = document.querySelector('.nav-links');

 menuToggle.addEventListener('click', () => {
     navLinks.classList.toggle('active');
 });