// VARIABLES.
const navButton = document.querySelector('.navigation-button');
const navMenu = document.querySelector('.navigation-menu');
const win = window;

// FUNCIONES.
function openMenu(event) {
    navButton.classList.toggle('active');
    navMenu.classList.toggle('active');

    event.preventDefault();
    event.stopImmediatePropagation();
}

function closeMenu(event) {
    if (navButton.classList.contains('active')) {
        navButton.classList.remove('active');
        navMenu.classList.remove('active');
    }
}

// EVENTOS.
navButton.addEventListener('click', openMenu, false);

win.addEventListener('click', closeMenu, false);
