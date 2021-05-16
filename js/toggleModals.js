const button_LikeModal = document.getElementById('toggle-like-modal');
let like_buttons = document.querySelectorAll('div.like');
let likesModal = document.querySelector('.modal-window.modal-likes');
let likesModalItemsContainer = likesModal.querySelector('.flex-container');
const liked_cards = [];

likesModal.style.display = "none";
button_LikeModal.addEventListener('click', (e) => {
    e.preventDefault();
    if (likesModal.style.display == "none") {
        likesModal.style.display = "flex";
    } else {
        likesModal.style.display = "none";
    }
});

function countLikedGoods() {
    document.getElementById('likes-counter').textContent = likesModalItemsContainer.querySelectorAll('.flex-card-item').length;
    if (likesModalItemsContainer.querySelectorAll('.flex-card-item').length == 0) {
        likesModal.querySelector('.empty-container').style.display = 'flex';
    } else {
        likesModal.querySelector('.empty-container').style.display = 'none';
    }
}
countLikedGoods();

function unlike() {
    if (document.querySelectorAll('.unlike-item').length == 1) {
        document.querySelector('.unlike-item').addEventListener('click', (e) => {
            e.preventDefault();
            let target = e.target;
            let closestCard = target.closest('.flex-card-item');

            liked_cards.filter((card, i) => {
                if (card.dataID == closestCard.dataset.goodId) {
                    liked_cards.splice(i, 1);
                    likesModalItemsContainer.querySelector(`[data-good-id="${card.dataID}"]`).remove();
                    document.querySelector(`.card[data-good-id="${card.dataID}"] .like > span > img`).src = "icons/card-heart.svg";

                    // Some AJAX function () {}

                    countLikedGoods();
                }
            });
        });
    } else {
        document.querySelectorAll('.unlike-item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                let target = e.target;
                let closestCard = target.closest('.flex-card-item');

                liked_cards.filter((card, i) => {
                    if (card.dataID == closestCard.dataset.goodId) {
                        liked_cards.splice(i, 1);
                        likesModalItemsContainer.querySelector(`[data-good-id="${card.dataID}"]`).remove();
                        document.querySelector(`.card[data-good-id="${card.dataID}"] .like > span > img`).src = "icons/card-heart.svg";

                        // Some AJAX function () {}

                        countLikedGoods();
                    }
                });
            });
        });
    }
}
unlike();
like_buttons.forEach(button => {
    button.addEventListener('click', (e) => {
        let target = e.target;
        let closestDatasetCard = target.closest('.card').dataset.goodId;
        if (!target.closest('.card').dataset.liked) {
            target.closest('.card').dataset.liked = "true";
            button.querySelector('img').src = 'icons/heart-selected.svg';
            let card = {
                dataID: closestDatasetCard,
                liked: target.closest('.card').dataset.liked,
                imgSRC: target.closest('.card').querySelector('.card-image > img').src,
                imgALT: target.closest('.card').querySelector('.card-image > img').alt,
                description: target.closest('.card').querySelector('.card-heading').textContent
            };
            console.log(card.imgALT);
            liked_cards.push(card);
            likesModalItemsContainer.insertAdjacentHTML('afterbegin', `
                <div class="flex-card-item" data-good-id="${card.dataID}">
                    <div class="flex-image">
                        <img src="${card.imgSRC}" alt="${card.imgALT}">
                    </div>
                    <div class="flex-decsription">
                        <p>${card.description}</p>
                        <a href="#" class="unlike-item">
                            &times;
                        </a>
                    </div>
                </div>
            `);

            // Some AJAX function () {}

            unlike();
            countLikedGoods();
        } else {
            let card = {
                dataID: closestDatasetCard,
                liked: target.closest('.card').dataset.liked
            };

            // Some AJAX function () {}

            liked_cards.filter((card, i) => {
                if (card.dataID == closestDatasetCard) {
                    liked_cards.splice(i, 1);
                    likesModalItemsContainer.querySelector(`[data-good-id="${card.dataID}"]`).remove();
                }
            });
            delete target.closest('.card').dataset.liked;
            button.querySelector('img').src = 'icons/card-heart.svg';
            unlike();
            countLikedGoods();
        }
    });
});