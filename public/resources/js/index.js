     //FLOATING TAGS
     document.addEventListener('DOMContentLoaded', function() {
        const floatingTags = document.querySelectorAll('.floating-tag');
        const modals = document.querySelectorAll('.modal');
        const closeBtns = document.querySelectorAll('.close');
    
        // Función para mostrar el modal
        function showModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'block';
        }
    
        // Función para cerrar el modal
        function closeModal(modal) {
            modal.style.display = 'none';
        }
    
        // Event listeners para las etiquetas flotantes
        floatingTags.forEach(tag => {
            tag.addEventListener('click', function(e) {
                e.preventDefault();
                const modalId = this.id + '-modal';
                showModal(modalId);
            });
        });
    
        // Event listeners para los botones de cierre
        closeBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const modal = this.closest('.modal');
                closeModal(modal);
            });
        });
    
        // Cerrar el modal si se hace clic fuera de él
        window.addEventListener('click', function(e) {
            modals.forEach(modal => {
                if (e.target == modal) {
                    closeModal(modal);
                }
            });
        });
    
        // Manejar el envío del formulario de contacto
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Aquí puedes agregar la lógica para enviar el formulario
                alert('Gracias por tu mensaje. Te contactaremos pronto.');
                this.reset();
                closeModal(document.getElementById('contact-us-modal'));
            });
        }
    });

// HEADER 
document.addEventListener('DOMContentLoaded', function() {
    const userDropdown = document.getElementById('userDropdown');
    const userDropdownContent = document.getElementById('userDropdownContent');
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const closeSidebar = document.getElementById('closeSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    if (userDropdown) {
        userDropdown.addEventListener('click', function() {
            userDropdownContent.classList.toggle('show');
        });
    }

    // Cerrar el menú desplegable si se hace clic fuera de él
    window.addEventListener('click', function(e) {
        if (!e.target.matches('.user-info, .user-info *')) {
            if (userDropdownContent) {
                userDropdownContent.classList.remove('show');
            }
        }
    });

    // Manejar la apertura y cierre del sidebar
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            sidebar.classList.add('open');
            sidebarOverlay.style.display = 'block';
        });
    }

    if (closeSidebar) {
        closeSidebar.addEventListener('click', closeSidebarFunction);
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebarFunction);
    }

    function closeSidebarFunction() {
        sidebar.classList.remove('open');
        sidebarOverlay.style.display = 'none';
    }
});
// TOGGLE BOTON MENU

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const closeSidebar = document.getElementById('closeSidebar');
    const userDropdown = document.getElementById('userDropdown');
    const userDropdownContent = document.getElementById('userDropdownContent');

    menuToggle.addEventListener('click', function() {
        sidebar.style.right = '0';
        sidebarOverlay.style.display = 'block';
    });

    function closeSidebarFunction() {
        sidebar.style.right = '-300px';
        sidebarOverlay.style.display = 'none';
    }

    closeSidebar.addEventListener('click', closeSidebarFunction);
    sidebarOverlay.addEventListener('click', closeSidebarFunction);

    userDropdown.addEventListener('click', function(e) {
        e.stopPropagation();
        userDropdownContent.style.display = userDropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', function() {
        userDropdownContent.style.display = 'none';
    });
});

//FINNISH TOGGLE BOTON MENU

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const closeSidebar = document.getElementById('closeSidebar');
    const userDropdown = document.getElementById('userDropdown');
    const userDropdownContent = document.getElementById('userDropdownContent');

    menuToggle.addEventListener('click', function() {
        sidebar.classList.add('active');
        sidebarOverlay.style.display = 'block';
    });

    function closeSidebarFunc() {
        sidebar.classList.remove('active');
        sidebarOverlay.style.display = 'none';
    }

    closeSidebar.addEventListener('click', closeSidebarFunc);
    sidebarOverlay.addEventListener('click', closeSidebarFunc);

    userDropdown.addEventListener('click', function() {
        userDropdownContent.style.display = userDropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', function(event) {
        if (!userDropdown.contains(event.target)) {
            userDropdownContent.style.display = 'none';
        }
    });
});

// START HERO SECTION SLIDER
// Variables
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.carousel-slide');
    const prevButton = document.querySelector('.carousel-control.prev');
    const nextButton = document.querySelector('.carousel-control.next');
    let currentSlide = 0;
    let intervalId;
  
    function showSlide(index) {
      slides[currentSlide].classList.remove('active');
      slides[index].classList.add('active');
      currentSlide = index;
    }
  
    function nextSlide() {
      let nextIndex = (currentSlide + 1) % slides.length;
      showSlide(nextIndex);
    }
  
    function prevSlide() {
      let prevIndex = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(prevIndex);
    }
  
    function startAutoMove() {
      intervalId = setInterval(() => {
        nextSlide();
      }, 5000); // Move to next slide every 5 seconds
    }
  
    function startAutoSlide() {
      stopAutoSlide(); // Clear any existing interval
      startAutoMove();
    }
  
    function stopAutoSlide() {
      clearInterval(intervalId);
    }
  
    nextButton.addEventListener('click', () => {
      stopAutoSlide();
      nextSlide();
      startAutoSlide();
    });
  
    prevButton.addEventListener('click', () => {
      stopAutoSlide();
      prevSlide();
      startAutoSlide();
    });
  
    // Touch events for mobile swipe
    let touchStartX = 0;
    let touchEndX = 0;
  
    document.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    });
  
    document.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    });
  
    function handleSwipe() {
      if (touchStartX - touchEndX > 50) {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
      }
      if (touchEndX - touchStartX > 50) {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
      }
    }
  
    // Pause auto-slide when user hovers over the carousel
    const carousel = document.querySelector('.hero-carousel');
    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);
  
    // Start the carousel
    showSlide(currentSlide);
    startAutoSlide();
  });
// FINISH HERO SECTION SLIDER

// START ROOM CARD

document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const roomCards = document.querySelectorAll('.room-card');
    const priceInput = document.getElementById('price-range');
    const priceFilterButton = document.querySelector('.price-filter button');

    function filterRooms(typeFilter = 'all') {
        const priceFilter = parseInt(priceInput.value) || Infinity;

        roomCards.forEach(card => {
            const cardType = Array.from(card.classList).find(cls => cls !== 'room-card');
            const price = parseInt(card.querySelector('.price span').textContent.replace('S/ ', ''));
            const matchesType = typeFilter === 'all' || cardType === typeFilter;
            const matchesPrice = price <= priceFilter;

            if (matchesType && matchesPrice) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function setActiveButton(activeButton) {
        filterButtons.forEach(button => button.classList.remove('active'));
        activeButton.classList.add('active');
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            filterRooms(filter);
            setActiveButton(button);
        });
    });

    priceFilterButton.addEventListener('click', () => {
        const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
        filterRooms(activeFilter);
    });

    // Initialize with 'all' filter
    filterRooms();
});

// Make filterRooms function global so it can be called from inline event handlers
window.filterRooms = function() {
    const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
    filterRooms(activeFilter);
};

// FINISH ROOM CARD

// SECTION RESTAURANTE
document.addEventListener('DOMContentLoaded', () => {
    const restaurantCards = document.querySelectorAll('.restaurant-card');

    // Function to check if an element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll animation
    function handleScrollAnimation() {
        restaurantCards.forEach(card => {
            if (isInViewport(card)) {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }
        });
    }

    // Initialize card styles
    restaurantCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    // Handle initial state
    handleScrollAnimation();

    // Add scroll event listener
    window.addEventListener('scroll', handleScrollAnimation);

    // Add click event listeners to buttons
    const cardButtons = document.querySelectorAll('.card-button');
    cardButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const restaurantName = e.target.closest('.restaurant-card').querySelector('.card-title').textContent;
            alert(`You've clicked to interact with ${restaurantName}. This is where you'd implement the specific functionality for each restaurant.`);
        });
    });
});

// FINISH SECTION RESTAURANTE

// SECTION TOURS
document.addEventListener('DOMContentLoaded', () => {
    const sidebarContent = document.querySelector('.sidebar-content');
    const sliderCards = document.querySelectorAll('.slider-card');

    // Clone items to ensure seamless rotation
    sliderCards.forEach(card => {
        const clone = card.cloneNode(true);
        sidebarContent.appendChild(clone);
    });

    // Adjust rotation speed based on content height
    function adjustRotationSpeed() {
        const contentHeight = sidebarContent.scrollHeight / 2; // Divide by 2 because we doubled the content
        const rotationDuration = contentHeight / 30; // Adjust 30 to change speed
        sidebarContent.style.animation = `rotate ${rotationDuration}s linear infinite`;
    }

    // Call on load and resize
    adjustRotationSpeed();
    window.addEventListener('resize', adjustRotationSpeed);

    // Pause rotation on hover
    sidebarContent.addEventListener('mouseenter', () => {
        sidebarContent.style.animationPlayState = 'paused';
    });

    sidebarContent.addEventListener('mouseleave', () => {
        sidebarContent.style.animationPlayState = 'running';
    });

    // Touch events for mobile devices
    let touchStartY = 0;
    let touchEndY = 0;

    sidebarContent.addEventListener('touchstart', (e) => {
        touchStartY = e.touches[0].clientY;
        sidebarContent.style.animationPlayState = 'paused';
    });

    sidebarContent.addEventListener('touchend', (e) => {
        touchEndY = e.changedTouches[0].clientY;
        const touchDiff = touchStartY - touchEndY;

        if (Math.abs(touchDiff) > 50) {
            // Adjust the scroll position based on touch direction
            sidebarContent.style.transform = `translateY(${-touchDiff}px)`;
            setTimeout(() => {
                sidebarContent.style.transition = 'none';
                sidebarContent.style.transform = 'translateY(0)';
                setTimeout(() => {
                    sidebarContent.style.transition = 'transform 0.3s ease';
                    sidebarContent.style.animationPlayState = 'running';
                }, 50);
            }, 300);
        } else {
            sidebarContent.style.animationPlayState = 'running';
        }
    });
});
// FINISH SECTION TOURS