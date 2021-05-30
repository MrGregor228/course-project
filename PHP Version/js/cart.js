(function () {
    const modalCart = document.querySelector('.modal-window.modal-cart');
    const button_cartModal = document.getElementById('toggle-cart-modal');
    let cartModalItemsContainer = modalCart.querySelector('.flex-container');

    function countCartGoods() {
        document.getElementById('goods-counter').textContent = cartModalItemsContainer.querySelectorAll('.flex-card-item').length;
        if (cartModalItemsContainer.querySelectorAll('.flex-card-item').length == 0) {
            modalCart.querySelector('.empty-container').style.display = 'flex';
        } else {
            modalCart.querySelector('.empty-container').style.display = 'none';
        }
    }
    countCartGoods();

    button_cartModal.addEventListener('click', (e) => {
        e.preventDefault();
        if (modalCart.style.display == "none") {
            modalCart.style.display = "flex";
        } else {
            modalCart.style.display = "none";
        }
    });
}());