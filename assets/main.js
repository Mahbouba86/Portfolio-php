// Menu mobile
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
    const isVisible = mobileMenu.classList.contains('hidden');
    if (isVisible) {
        mobileMenu.classList.remove('hidden');
    } else {
        mobileMenu.classList.add('hidden');
    }
});