const navBtn = document.querySelector('#bar');
const navbar = document.querySelector('#navitems');

navBtn.addEventListener('click', () => {
    navbar.classList.toggle('navToggle');
});

const navItems = document.querySelectorAll('#navitems li a');

navItems.forEach(item => {
    item.addEventListener('click', () => {
        navbar.classList.add('navToggle');
    });
});