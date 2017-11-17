window.onload = getHeaderHeight;

function getHeaderHeight(){
    var header = document.getElementsByTagName('header')[0];
    var nav = document.getElementById('nav');
    var navHeight = parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
    header.style.height = parseInt(window.innerHeight) - navHeight + 'px';
}

$( document ).ready( function() {
    var altura = parseInt(window.innerHeight) - parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
    $('#nav').affix({
        offset: {
            top: altura
        }
    })
});