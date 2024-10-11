// Funcionalidad para las etiquetas flotantes y modales
document.addEventListener('DOMContentLoaded', function() {
    const howToArriveTag = document.getElementById('how-to-arrive');
    const contactUsTag = document.getElementById('contact-us');
    const howToArriveModal = document.getElementById('how-to-arrive-modal');
    const contactUsModal = document.getElementById('contact-us-modal');
    const closeBtns = document.getElementsByClassName('close');

    function openModal(modal) {
        modal.style.display = 'block';
    }

    function closeModal(modal) {
        modal.style.display = 'none';
    }

    howToArriveTag.addEventListener('click', () => openModal(howToArriveModal));
    contactUsTag.addEventListener('click', () => openModal(contactUsModal));

    Array.from(closeBtns).forEach(btn => {
        btn.addEventListener('click', () => {
            closeModal(howToArriveModal);
            closeModal(contactUsModal);
        });
    });

    window.addEventListener('click', (event) => {
        if (event.target === howToArriveModal) {
            closeModal(howToArriveModal);
        }
        if (event.target === contactUsModal) {
            closeModal(contactUsModal);
        }
    });
});

// Código existente (sticky header, etc.)
// ...

// Funcionalidad para el formulario de contacto
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validación básica
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        if (name === '' || email === '' || message === '') {
            alert('Por favor, completa todos los campos.');
            return;
        }

        if (!isValidEmail(email)) {
            alert('Por favor, introduce un email válido.');
            return;
        }

        // Aquí iría el código para enviar el formulario a un servidor
        // Por ahora, solo mostraremos un mensaje de éxito
        alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
        contactForm.reset();
    });

    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});

// Código existente (etiquetas flotantes, modales, etc.)
// ...

// js/index.js
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            cards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 500);
                }
            });
        });
    });

    // Animación de entrada para las tarjetas
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
    });

    setTimeout(() => {
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }, 500);

    // Animación para el botón de reserva
    const bookButtons = document.querySelectorAll('.book-now');
    bookButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            button.classList.add('clicked');
            setTimeout(() => {
                button.classList.remove('clicked');
            }, 300);
        });
    });
});

// FUNCION PARA EL MENU DESPLEGABLE

document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.menu-toggle');
    const sidebarWrapper = document.querySelector('.sidebar');
    let isSidebarOpen = false;
  
    sidebarToggle.addEventListener('click', function() {
      isSidebarOpen = !isSidebarOpen;
      sidebarWrapper.classList.toggle('sidebar-open');
  
      if (isSidebarOpen) {
        document.body.style.overflow = 'hidden';
      } else {
        document.body.style.overflow = '';
      }
    });
  
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(toggle => {
      toggle.addEventListener('click', function(e) {
        e.stopPropagation();
        const menu = this.nextElementSibling;
        menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
      });
    });
  });