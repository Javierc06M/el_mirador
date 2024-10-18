document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    const editProfileBtn = document.getElementById('edit-profile-btn');
    const modal = document.getElementById('modal');
    const closeBtn = document.querySelector('.close');
    const quickEditForm = document.getElementById('quick-edit-form');
    const profileForm = document.getElementById('profile-form');

    // Datos de ejemplo
    let userData = {
        name: "María García",
        email: "maria.garcia@example.com",
        phone: "+34 123 456 789",
        avatar: "https://i.pravatar.cc/150?img=32",
        memberSince: "2022"
    };

    const reservas = [
        { id: 1, room: "Suite Deluxe", checkIn: "2023-07-15", checkOut: "2023-07-20" },
        { id: 2, room: "Habitación Estándar", checkIn: "2023-08-01", checkOut: "2023-08-05" },
    ];

    const restaurantOrders = [
        { id: 1, dish: "Paella Valenciana", date: "2023-07-16", price: 25 },
        { id: 2, dish: "Solomillo a la pimienta", date: "2023-07-18", price: 30 },
    ];

    const tourReservations = [
        { id: 1, tour: "Tour por la ciudad", date: "2023-07-17", price: 40 },
        { id: 2, tour: "Excursión a la playa", date: "2023-07-19", price: 55 },
    ];

    // Función para cambiar de pestaña
    function switchTab(tabId) {
        tabButtons.forEach(button => {
            button.classList.remove('active');
            if (button.dataset.tab === tabId) {
                button.classList.add('active');
            }
        });

        tabContents.forEach(content => {
            content.classList.remove('active');
            if (content.id === tabId) {
                content.classList.add('active');
            }
        });
    }

    // Event listeners para los botones de las pestañas
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            switchTab(button.dataset.tab);
        });
    });

    // Función para crear elementos de lista
    function createListItem(data, type) {
        const li = document.createElement('li');
        li.className = 'list-item';
        
        let content = '';
        switch (type) {
            case 'reserva':
                content = `
                    <h3>${data.room}</h3>
                    <p>Check-in: ${data.checkIn}</p>
                    <p>Check-out: ${data.checkOut}</p>
                `;
                break;
            case 'restaurante':
                content = `
                    <h3>${data.dish}</h3>
                    <p>Fecha: ${data.date}</p>
                    <p>Precio: €${data.price}</p>
                `;
                break;
            case 'tour':
                content = `
                    <h3>${data.tour}</h3>
                    <p>Fecha: ${data.date}</p>
                    <p>Precio: €${data.price}</p>
                `;
                break;
        }
        
        li.innerHTML = content;
        return li;
    }

    // Cargar datos en las listas
    function loadListData() {
        const reservasList = document.getElementById('reservas-list');
        reservasList.innerHTML = '';
        reservas.forEach(reserva => {
            
            reservasList.appendChild(createListItem(reserva, 'reserva'));
        });

        const restauranteList = document.getElementById('restaurante-list');
        restauranteList.innerHTML = '';
        restaurantOrders.forEach(order => {
            restauranteList.appendChild(createListItem(order, 'restaurante'));
        });

        const toursList = document.getElementById('tours-list');
        toursList.innerHTML = '';
        tourReservations.forEach(tour => {
            toursList.appendChild(createListItem(tour, 'tour'));
        });
    }

    // Cargar datos del usuario
    function loadUserData() {
        document.getElementById('user-name').textContent = userData.name;
        document.getElementById('user-email').textContent = userData.email;
        document.getElementById('member-since').textContent = `Miembro desde ${userData.memberSince}`;
        document.getElementById('profile-avatar').src = userData.avatar;

        // Cargar datos en el formulario de configuración
        document.getElementById('name').value = userData.name;
        document.getElementById('email').value = userData.email;
        document.getElementById('phone').value = userData.phone;
        document.getElementById('avatar').value = userData.avatar;
    }

    // Evento para abrir el modal de edición rápida
    editProfileBtn.addEventListener('click', () => {
        document.getElementById('quick-name').value = userData.name;
        document.getElementById('quick-email').value = userData.email;
        modal.style.display = "block";
    });

    // Evento para cerrar el modal
    closeBtn.addEventListener('click', () => {
        modal.style.display = "none";
    });

    // Cerrar el modal si se hace clic fuera de él
    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });

    // Manejar la edición rápida del perfil
    quickEditForm.addEventListener('submit', (e) => {
        e.preventDefault();
        userData.name = document.getElementById('quick-name').value;
        userData.email = document.getElementById('quick-email').value;
        loadUserData();
        modal.style.display = "none";
    });

    // Manejar la actualización completa del perfil
    profileForm.addEventListener('submit', (e) => {
        e.preventDefault();
        userData = {
            ...userData,
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            avatar: document.getElementById('avatar').value
        };
        loadUserData();
        alert('Perfil actualizado con éxito');
    });

    // Inicializar la página
    loadListData();
    loadUserData();
});