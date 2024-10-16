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

const colorRange = document.getElementById('colorRange');
        const body = document.body;

        colorRange.addEventListener('input', function() {
            const blueValue = colorRange.value;
            // Change background color based on the slider value
            body.style.backgroundColor = `rgb(0, 0, ${blueValue})`;
});

$(function () {
    $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
        var rating = data.rating;
        $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
        $(this).parent().find('.result').text('rating :'+ rating);
        $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
    });
});