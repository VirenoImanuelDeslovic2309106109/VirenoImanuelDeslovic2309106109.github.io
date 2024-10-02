const hamburger = document.getElementById('hamburger');
const navbarList = document.getElementById('navbar-list');
hamburger.addEventListener('click', () => {
    navbarList.style.display = navbarList.style.display === 'flex'? 'none' : 'flex';
});

window.onload = function() {
    document.getElementById('popup').style.display = 'flex';
}
document.getElementById('close-popup').onclick = function() {
    document.getElementById('popup').style.display = 'none';
}
const modeToggle = document.getElementById('mode-toggle');

modeToggle.addEventListener('change', () => {
    document.body.classList.toggle('dark-mode');
    const navbarLinks = document.querySelectorAll('.navbar-item a');
    navbarLinks.forEach(link => {
        link.classList.toggle('dark-mode');
    });
    const elements = document.querySelectorAll('.navbar-section, .footer-copyright, .popup-content');
    elements.forEach(element => {
        element.classList.toggle('dark-mode');
    });
});

