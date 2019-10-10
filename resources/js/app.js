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
    $('.testimonials-box').slick({
        //autoplay: true
        dots: true
    });

    let navLinks = $('.nav-link'),
        investments = $('.investments')[0].offsetTop,
        strategies = $('.strategies')[0].offsetTop,
        guarantee = $('.guarantee')[0].offsetTop,
        testimonials = $('.testimonials')[0].offsetTop,
        footer = $('.footer')[0].offsetTop;

    const navigation = {
        index: 0,
        investments: 1,
        strategies: 2,
        guarantee: 3,
        testimonials: 4,
        footer: 5
    };

    $('.site-container').scroll(function() {
       let scrollTop = $(this)[0].scrollTop + navLinks[0].clientHeight;

       if (scrollTop >= investments && scrollTop < strategies) {
            navActive(navLinks, navigation.investments)
       } else if (scrollTop >= strategies && scrollTop < guarantee) {
           navActive(navLinks, navigation.strategies)
       } else if (scrollTop >= guarantee && scrollTop < testimonials) {
           navActive(navLinks, navigation.guarantee)
       } else if (scrollTop >= testimonials && scrollTop < footer) {
           navActive(navLinks, navigation.testimonials)
       } else if (scrollTop >= footer) {
           navActive(navLinks, navigation.footer)
       } else {
           navActive(navLinks, navigation.index)
       }
    });

    navLinks.on('click', function (e) {
        e.preventDefault();
        let navItem = $(this).data('section');

        let section = (navItem === 'index') ? 0 : $('.' + navItem)[0].offsetTop - navLinks[0].clientHeight;

        $('.site-container').animate({
            scrollTop: section
        }, 1000);
    })

});

// Делает активным элемен навигации
function navActive(htmlCollection, el) {
    for (let item of htmlCollection) {
        $(item).removeClass('active')
    }
    $(htmlCollection[el]).addClass('active')
}





