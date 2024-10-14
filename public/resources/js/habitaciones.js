function searchRooms() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const rooms = document.querySelectorAll('.room-card');

    rooms.forEach(room => {
        const category = room.getAttribute('data-category');
        const roomTitle = room.querySelector('h3').textContent.toLowerCase();
        const roomDescription = room.querySelector('p').textContent.toLowerCase();

        if (category.includes(input) || roomTitle.includes(input) || roomDescription.includes(input)) {
            room.style.display = "block";
        } else {
            room.style.display = "none";
        }
    });
}
