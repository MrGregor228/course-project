// Timer for sales
function setSaleInterval(eventDate, cardID) {
    let eventTime = new Date(eventDate).getTime();
    let currentTime = new Date().getTime(); 
    let diffTime = eventTime - currentTime;
    let duration = moment.duration(diffTime);
    let interval = 1000;
    function addZeroToNumber(num) {
        if(num <= 9) {
            return '0' + num;
        } else return num;
    }
    setInterval(function () {
        duration = moment.duration(duration - interval, 'milliseconds');
        document.querySelector(`[data-good-id="${cardID}"] .sale-container`).textContent = `${addZeroToNumber(duration.days())}д : ${addZeroToNumber(duration.hours())}ч : ${addZeroToNumber(duration.minutes())}м : ${addZeroToNumber(duration.seconds())}с`;
    }, interval);
}

window.addEventListener('DOMContentLoaded', () => {
    let toggle_button = document.querySelector('.toggle-button'),
        menu = document.getElementById('menu');

    let saleCards = document.querySelectorAll('.card.sale');
    if (saleCards.length == 1) {
        setSaleInterval(saleCards[0].dataset.expiryDate, saleCards[0].dataset.goodId);
    } else if (saleCards.length > 1) {
        saleCards.forEach(card => {
            setSaleInterval(card.dataset.expiryDate, card.dataset.goodId);
        });
    }

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
(function () {
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