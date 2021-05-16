// Timer for sales
function setSaleInterval(eventDate, cardID) {
    let eventTime = new Date(eventDate).getTime();
    let currentTime = new Date().getTime();
    let diffTime = eventTime - currentTime;
    let duration = moment.duration(diffTime);
    let interval = 1000;

    function addZeroToNumber(num) {
        if (num <= 9) {
            return '0' + num;
        } else return num;
    }
    setInterval(function () {
        duration = moment.duration(duration - interval, 'milliseconds');
        if (duration - interval == 0 || duration - interval < 0) {
            document.querySelector(`[data-good-id="${cardID}"] .sale-container`).textContent = 'Завершилась';
            clearInterval();
        } else {
            document.querySelector(`[data-good-id="${cardID}"] .sale-container`).textContent = `${addZeroToNumber(duration.days())}д : ${addZeroToNumber(duration.hours())}ч : ${addZeroToNumber(duration.minutes())}м : ${addZeroToNumber(duration.seconds())}с`;
        }
    }, interval);
}

window.addEventListener('DOMContentLoaded', () => {
    let toggle_button = document.querySelector('.toggle-button'),
        menu = document.getElementById('menu'),
        modals = document.querySelectorAll('.modal-window'),
        cardContainers = document.querySelectorAll('.cards-container');  

    let saleCards = document.querySelectorAll('.card.sale');
    if (saleCards.length == 1) {
        setSaleInterval(saleCards[0].dataset.expiryDate, saleCards[0].dataset.goodId);
    } else if (saleCards.length > 1) {
        saleCards.forEach(card => {
            setSaleInterval(card.dataset.expiryDate, card.dataset.goodId);
        });
    }
    if (modals.length == 1) {
        modals[0].querySelector('.modal-closer').addEventListener('click', () => {
            modals[0].style.display = "none";
        });
    } else if (modals.length > 1) {
        modals.forEach(modal => {
            modal.querySelector('.modal-closer').addEventListener('click', () => {
                modal.style.display = "none";
            });
        });
    }

    toggle_button.addEventListener('click', () => {
        menu.classList.toggle('show');
    });

    this.addEventListener('resize', () => {
        console.log("resized");
        if (this.document.body.clientWidth > 800) {
            menu.classList.remove('show');
        }
       
        cardContainers.forEach(cont => {
            if (cont.querySelector('.cards-wrapper').clientWidth > cont.clientWidth) {
                cont.classList.add('scrolling');
            } else {
                cont.classList.remove('scrolling');
            }
        });

    });

    this.addEventListener('DOMContentLoaded', () => {
        if (this.document.body.clientWidth > 800) {
            menu.classList.remove('show');            
        } 
        cardContainers.forEach(cont => {
            if (cont.querySelector('.cards-wrapper').clientWidth > cont.clientWidth) {
                cont.classList.add('scrolling');
            } else {
                cont.classList.remove('scrolling');
            }
        });   
    });

});
let nowYear = document.getElementById('nowYear').textContent = new Date().getFullYear();
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