$(document).ready(function(){
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items : 1,
        slideSpeed : 2000,
        nav: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsiveRefreshRate : 200,
    });
});