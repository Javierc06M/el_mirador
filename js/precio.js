function filterRooms() {
    // Obtener el valor ingresado por el usuario
    const inputPrice = parseFloat(document.getElementById('price-range').value);
    const priceRange = 50; // Definir el rango de precio aceptado (+/- 50 soles)
    
    // Verificar si se ingresó un número válido
    if (isNaN(inputPrice)) {
        alert("Por favor, ingresa un valor válido.");
        return;
    }

    // Seleccionar todas las tarjetas de habitaciones
    const roomCards = document.querySelectorAll('.card');
    
    // Iterar sobre cada tarjeta de habitación y mostrar/ocultar según el rango de precios
    roomCards.forEach(card => {
        // Obtener el precio de la habitación
        const priceText = card.querySelector('.price span').textContent;
        const roomPrice = parseFloat(priceText.replace('S/', '').replace(',', '').trim());
        
        // Comparar el precio de la habitación con el rango de precios
        if (roomPrice >= (inputPrice - priceRange) && roomPrice <= (inputPrice + priceRange)) {
            // Mostrar la habitación si está dentro del rango
            card.style.display = 'block';
        } else {
            // Ocultar la habitación si está fuera del rango
            card.style.display = 'none';
        }
    });
}