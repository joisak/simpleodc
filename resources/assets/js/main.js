console.log('File `app.js` loaded!')

var mobileMenu = document.querySelector('#mobile-menu'),
    mobileIcon = document.querySelector('#nav-icon3'),
    header = document.querySelector('#header');

mobileIcon.addEventListener('click', function(){
    this.classList.toggle('open');
    console.log('log');
    mobileMenu.classList.toggle('show');
})


window.addEventListener('scroll', scrolling, scrolling());


function scrolling() {
    var mainContent = document.getElementById('main-content'),
    distanceToTop = mainContent.getBoundingClientRect().top,
    distans = -20;

    distanceToTop > distans ? header.classList.remove('dark') : header.classList.add('dark');
    
 }

