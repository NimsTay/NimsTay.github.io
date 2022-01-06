
let menu = document.querySelector('#about-mobile-menu')//targets the hamburger 
let menuLinks = document.querySelector('.nav_menu')//targets the ul

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active')
})