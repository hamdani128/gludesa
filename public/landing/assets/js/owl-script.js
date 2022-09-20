/* -- Hero Slider -- */

$(document).ready(function() {
    $('.hero-block-slider').owlCarousel({
        items:1,
        margin:0,
        nav: true,
        loop:true,
        dots:false,
        smartSpeed:700,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        navText: [ '<i class="fas fa-chevron-left"></span>', '<i class="fas fa-chevron-right"></span>' ]
        })
})

/* -- Testimonials Slider -- */

$(document).ready(function() {
$('.testimonials-slider').owlCarousel({
    margin:30,
    nav: true,
    loop:true,
    dots:false,
    smartSpeed:700,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    navText: [ '<i class="fas fa-chevron-left"></span>', '<i class="fas fa-chevron-right"></span>' ],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },

        1024:{
            items:3
        }
    }
    })
})

/* -- Logo Slider -- */

$(document).ready(function() {
    $('.logo-carousel').owlCarousel({
        margin:30,
        nav: false,
        loop:true,
        dots:false,
        smartSpeed:700,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            768:{
                items:3
            },
    
            1024:{
                items:4
            }
        }
        })
    })
  