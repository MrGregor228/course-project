const button_LikeModal = document.getElementById('toggle-like-modal');
button_LikeModal.addEventListener('click', () => {
    if (document.querySelector('.modal-likes').style.display == "none") {
        document.querySelector('.modal-likes').style.display = "flex";
    } else {
        document.querySelector('.modal-likes').style.display == "none";
    }
});