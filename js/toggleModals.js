const button_LikeModal = document.getElementById('toggle-like-modal');
let like_buttons = document.querySelectorAll('div.like');
const liked_cards = [];

button_LikeModal.addEventListener('click', () => {
    if (document.querySelector('.modal-likes').style.display == "none") {
        document.querySelector('.modal-likes').style.display = "flex";
    } else {
        document.querySelector('.modal-likes').style.display == "none";
    }
});

like_buttons.forEach(button => {
    button.addEventListener('click', (e) => {
        let target = e.target;
        let closestDatasetCard = target.closest('.card').dataset.goodId;
        if (!target.closest('.card').dataset.liked) {
            target.closest('.card').dataset.liked = "true";
            button.querySelector('img').src = 'icons/heart-selected.svg';
            let card = {
                dataID: closestDatasetCard,
                liked: target.closest('.card').dataset.liked
            };
            liked_cards.push(card);

            
        } else {
            let card = {
                dataID: closestDatasetCard,
                liked: target.closest('.card').dataset.liked
            };
            liked_cards.filter((card,i) => {
                if (card.dataID == closestDatasetCard) {
                    liked_cards.splice(i,1);
                }
            });
            delete target.closest('.card').dataset.liked;
            button.querySelector('img').src = 'icons/card-heart.svg';
        }
    });
});