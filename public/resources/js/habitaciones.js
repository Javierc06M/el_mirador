document.addEventListener('DOMContentLoaded', () => {
    // Menú móvil
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    menuToggle.addEventListener('click', () => {
        mobileNav.classList.toggle('active');
        menuToggle.querySelector('i').classList.toggle('fa-bars');
        menuToggle.querySelector('i').classList.toggle('fa-times');
    });

    // Carrusel de hero
    const heroCarousel = document.querySelector('.hero-carousel');
    const heroSlides = document.querySelectorAll('.hero-slide');
    const prevBtn = document.querySelector('.hero-control.prev');
    const nextBtn = document.querySelector('.hero-control.next');
    let currentSlide = 0;

    function showSlide(index) {
        heroCarousel.style.transform = `translateX(-${index * 33.333}%)`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % heroSlides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + heroSlides.length) % heroSlides.length;
        showSlide(currentSlide);
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Cambio automático de slides cada 5 segundos
    setInterval(nextSlide, 5000);

    // Filtrado de habitaciones
    const categoryButtons = document.querySelectorAll('.category-btn');
    const roomCards = document.querySelectorAll('.room-card');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.dataset.category;
            
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            roomCards.forEach(card => {
                if (category === 'todas' || card.dataset.category === category) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Animación de scroll suave
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Animación del header al hacer scroll
    const header = document.querySelector('header');
    let lastScrollTop = 0;

    window.addEventListener('scroll', () => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        lastScrollTop = scrollTop;
    });

    // Animación de entrada para elementos
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.room-card, .service-card');
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            if (elementTop < window.innerHeight && elementBottom > 0) {
                element.classList.add('animate');
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Llamar una vez al cargar la página
});

// Seleccionar elementos del DOM
const roomCards = document.querySelectorAll('.room-card');
const modal = document.getElementById('room-modal');
const modalTitle = document.getElementById('modal-room-title');
const modalImage = document.getElementById('modal-room-image');
const modalDescription = document.getElementById('modal-room-description');
const modalPrice = document.getElementById('modal-room-price');
const modalServices = document.getElementById('modal-room-services');
const closeBtn = modal.querySelector('.close');

// Función para abrir el modal
function openModal(roomData) {
    modalTitle.textContent = roomData.title;
    modalImage.src = roomData.imageSrc;
    modalImage.alt = roomData.title;
    modalDescription.textContent = roomData.description;
    modalPrice.textContent = roomData.price;
    
    // Limpiar servicios anteriores
    modalServices.innerHTML = '';
    
    // Agregar servicios
    roomData.services.forEach(service => {
        const serviceSpan = document.createElement('span');
        serviceSpan.className = 'service-item';
        serviceSpan.innerHTML = `<i class="${service.icon}"></i> ${service.name}`;
        modalServices.appendChild(serviceSpan);
    });

    modal.style.display = 'block';
    // Forzar un reflow antes de agregar la clase 'show'
    void modal.offsetWidth;
    modal.classList.add('show');
}

// Función para cerrar el modal
function closeModal() {
    modal.classList.remove('show');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 300); // Este tiempo debe coincidir con la duración de la transición en CSS
}

// Agregar event listeners a las tarjetas de habitación
roomCards.forEach(card => {
    card.addEventListener('click', () => {
        const roomData = {
            title: card.querySelector('h3').textContent,
            imageSrc: card.querySelector('.room-image').src,
            description: card.querySelector('p').textContent,
            price: card.querySelector('.room-price').textContent,
            services: Array.from(card.querySelectorAll('.service-item')).map(item => ({
                icon: item.querySelector('i').className,
                name: item.textContent.trim()
            }))
        };
        openModal(roomData);
    });
});

// Cerrar modal al hacer clic en el botón de cierre
closeBtn.addEventListener('click', closeModal);

// Cerrar modal al hacer clic fuera del contenido del modal
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        closeModal();
    }
});

// Cerrar modal con la tecla Escape
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && modal.classList.contains('show')) {
        closeModal();
    }
});