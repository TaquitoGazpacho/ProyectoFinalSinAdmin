window.onload = getHeaderHeight;

function getHeaderHeight(){
    var header = document.getElementsByTagName('header')[0];
    var nav = document.getElementById('nav');
    var navHeight = parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
    header.style.height = parseInt(window.innerHeight) - navHeight + 'px';


}

$( document ).ready( function() {
    $('#nav').affix({
        offset: {
            top: $('header').height()
        }
    })
});