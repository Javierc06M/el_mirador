  // Funcionalidad para los filtros de habitaciones
  const filterButtons = document.querySelectorAll('.filter-btn');
  const roomCards = document.querySelectorAll('.room-card');

  filterButtons.forEach(button => {
      button.addEventListener('click', () => {
          const filter = button.getAttribute('data-filter');
          
          filterButtons.forEach(btn => btn.classList.remove('active'));
          button.classList.add('active');

          roomCards.forEach(card => {
              if (filter === 'all' || card.classList.contains(filter)) {
                  card.style.display = 'block';
              } else {
                  card.style.display = 'none';
              }
          });
      });
  });

  // Funcionalidad para el filtro de precio
  function filterRooms() {
      const priceInput = document.getElementById('price-range');
      const maxPrice = parseInt(priceInput.value);

      roomCards.forEach(card => {
          const price = parseInt(card.querySelector('.price span').textContent.replace('S/ ', ''));
          if (isNaN(maxPrice) || price <= maxPrice) {
              card.style.display = 'block';
          } else {
              card.style.display = 'none';
          }
      });
  }
