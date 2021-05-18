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
    let saleCards = document.querySelectorAll('.card.sale');
    const filterButton = document.getElementById('open-filter');
    const closeFilter = document.querySelector('.close-filter');
    filterButton.addEventListener('click',() => {
        document.querySelector('.filter-overlay').classList.toggle("opened");
    });
    closeFilter.addEventListener('click', (e) => {
        e.target.closest('.filter-overlay').classList.toggle('opened');
    });
    if (saleCards.length == 1) {
        setSaleInterval(saleCards[0].dataset.expiryDate, saleCards[0].dataset.goodId);
    } else if (saleCards.length > 1) {
        saleCards.forEach(card => {
            setSaleInterval(card.dataset.expiryDate, card.dataset.goodId);
        });
    }
});