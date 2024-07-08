const toggleButton = document.getElementById('toggle-menu');
const mobileMenu = document.getElementById('mobile-menu');
const menuOpenIcon = document.getElementById('menu-open');
const menuCloseIcon = document.getElementById('menu-close');

// Add click event listener to toggle button
toggleButton.addEventListener('click', function () {
    // Toggle the 'hidden' class on the mobile menu element
    mobileMenu.classList.toggle('hidden');

    // Toggle the visibility of menu icons
    menuOpenIcon.classList.toggle('hidden');
    menuCloseIcon.classList.toggle('hidden');
});