$(document).ready(function(){
    $('.sidenav').sidenav();

    // mengaktifkan dropdown pada header nav
    $(".dropdown-trigger").dropdown();

    // toggle on/off sidebar
    $( ".burgerNav" ).click(function() {
        $('header').toggleClass('open');
        $('main').toggleClass('open');
        $('footer').toggleClass('open');
        $('.sidenav').toggleClass('close');
    });
});