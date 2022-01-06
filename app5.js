
let menu = document.querySelector('#port-mobile-menu')//targets the hamburger 
let menuLinks = document.querySelector('.nav_menu')//targets the ul

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active')
})