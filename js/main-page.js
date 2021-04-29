window.addEventListener('DOMContentLoaded', () => {
    let toggle_button = document.querySelector('.toggle-button'),
        menu = document.getElementById('menu');

    toggle_button.addEventListener('click', () => {
        menu.classList.toggle('show');
    });

    this.addEventListener('resize', () => {
        if (this.document.body.clientWidth > 800) {
            menu.classList.remove('show');
        }
    });

    this.addEventListener('DOMContentLoaded', () => {
        if (this.document.body.clientWidth > 800) {
            menu.classList.remove('show');
        }
    });
});

// Swiper Slider config
(function name() {
    const mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        spaceBetween: 15,
        slidesPerView: 1,
        dynamicBullets: true,
        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        // Navigation arrows
        navigation: {
            el: '.swiper-pagination'
        }
    });
}());