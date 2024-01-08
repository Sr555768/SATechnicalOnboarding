document.addEventListener('DOMContentLoaded', function () {
    const button = document.querySelector('.ui-button');
    const modal = document.querySelector('.ui-modal');
    const closeButton = document.querySelector('.ui-close-btn');

    button.addEventListener('click', function () {
        modal.style.display = 'block';
    });

    closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
    });
});
