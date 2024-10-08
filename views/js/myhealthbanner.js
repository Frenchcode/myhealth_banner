$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        lazyLoad: true,
        animateIn: 'animate__fadeInDown',
        animateOut: 'animate__fadeOutLeft',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});