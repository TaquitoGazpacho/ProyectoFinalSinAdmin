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
    });

    $(function(){
        $(window).scroll(function() {
            var scroll = $(window).scrollTop(); // how many pixels you've scrolled
            var os = $('#nav').offset().top; // pixels to the top of div1
            //var ht = $('#div1').height(); // height of div1 in pixels
            // if you've scrolled further than the top of div1 plus it's height
            // change the color. either by adding a class or setting a css property
            if(scroll >= os){
                $('#prueba').addClass('vg');
            } else{
                $('#prueba').removeClass('vg');
            }
        });
    });
});