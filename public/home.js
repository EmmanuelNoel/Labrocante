document.addEventListener('DOMContentLoaded', function () {
    var popupElement = document.querySelector('.show-popup');

    if (popupElement && window.getComputedStyle(popupElement).display === 'block') {
        setTimeout(function () {
            popupElement.classList.add('animate__animated','animate__fadeOutRight')
        }, 7000); // 7000 millisecondes (7 secondes)
    }
});