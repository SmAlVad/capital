require('./bootstrap');

require('jquery/dist/jquery.min');

require('@fortawesome/fontawesome-free/js/all.min');

require('slick-carousel/slick/slick');

$(document).ready(function(){

    // top carousel
    $('.top-carousel').slick({
        //autoplay: true
    });

    // testimonials carousel
    $('.testimonials').slick({
        //autoplay: true
        dots: true
    });

});

