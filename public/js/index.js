window.onload = getHeaderHeight;

function getHeaderHeight(){
    var header = document.getElementsByTagName('header')[0];
    var nav = document.getElementById('nav');
    var navHeight = parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
    var html = document.getElementsByTagName('html')[0];
    header.style.height = parseInt(window.innerHeight) - navHeight + 'px';
    if (document.URL.includes("login") || document.URL.includes("register")) {
        //document.body.style.height = parseInt(window.innerHeight) + 'px';
        //html.style.height = parseInt(window.innerHeight) + 'px';
        document.body.style.overflow = 'hidden';
    }
}

$( document ).ready( function() {
    var altura = parseInt(window.innerHeight) - parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
    $('#nav').affix({
        offset: {
            top: altura
        }
    })
});