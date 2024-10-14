const sliderContainer = document.querySelector('.slider-container');
        const prevButton = document.querySelector('.slider-button.prev');
        const nextButton = document.querySelector('.slider-button.next');
        let slideIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slider-card');
            if (index >= slides.length) slideIndex = 0;
            if (index < 0) slideIndex = slides.length - 1;
            
            const offset = -slideIndex * 100;
            sliderContainer.style.transform = `translateX(${offset}%)`;
        }

        prevButton.addEventListener('click', () => {
            slideIndex--;
            showSlide(slideIndex);
        });

        nextButton.addEventListener('click', () => {
            slideIndex++;
            showSlide(slideIndex);
        });

        // Responsive behavior
        function handleResize() {
            const width = window.innerWidth;
            if (width >= 1025) {
                sliderContainer.style.transform = 'translateX(0)';
            } else if (width >= 769 && width <= 1024) {
                sliderContainer.style.transform = 'translateX(0)';
            } else {
                showSlide(slideIndex);
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize(); // Initial call
