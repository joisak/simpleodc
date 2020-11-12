console.log('File `app.js` loaded')

var mobileMenu = document.querySelector('#mobile-menu'),
    mobileIcon = document.querySelector('#nav-icon3');

mobileIcon.addEventListener('click', function(){
    this.classList.toggle('open');
    console.log('log');
    mobileMenu.classList.toggle('show');
})


