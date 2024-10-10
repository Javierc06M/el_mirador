document.addEventListener('DOMContentLoaded', function() {
    const userItem = document.querySelector('.nav-item.user-item');
    const dropdownToggle = userItem.querySelector('.dropdown-toggle');
    const dropdownContent = userItem.querySelector('.dropdown-content');

    // Function to show dropdown
    function showDropdown() {
        dropdownContent.style.opacity = '1';
        dropdownContent.style.visibility = 'visible';
        dropdownContent.style.transform = 'translateY(0)';
        dropdownToggle.setAttribute('aria-expanded', 'true');
    }

    // Function to hide dropdown
    function hideDropdown() {
        dropdownContent.style.opacity = '0';
        dropdownContent.style.visibility = 'hidden';
        dropdownContent.style.transform = 'translateY(-10px)';
        dropdownToggle.setAttribute('aria-expanded', 'false');
    }

    // Show dropdown on hover
    userItem.addEventListener('mouseenter', showDropdown);
    userItem.addEventListener('mouseleave', hideDropdown);

    // Toggle dropdown on click (for touch devices)
    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        if (dropdownContent.style.visibility === 'visible') {
            hideDropdown();
        } else {
            showDropdown();
        }
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!userItem.contains(e.target)) {
            hideDropdown();
        }
    });

    // Handle keyboard navigation
    userItem.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            if (dropdownContent.style.visibility === 'visible') {
                hideDropdown();
            } else {
                showDropdown();
            }
        }
    });
});