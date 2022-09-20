/* -- Get Content Mobile Navbar -- */

var webLogo = $('.website-brand').html();

var menuWeb = $('#navbarSupportedContent').html();

$('.mobile-brand').html(webLogo);

$('.footer-logo').html(webLogo);

$('.menu-mb-content').html(menuWeb);

/* -- Mobile Menu Open > Close -- */

$(document).ready(function(){

    /* -- Mobile Menu Open > Close -- */

    $('.menu-toggle').click(function(){

        $('.mobile-menu-canvas').addClass('show');
        $('.mb-overlay').addClass('show');
        
    })
    
    $('.close-toggle').click(function(){
    
        $('.mobile-menu-canvas').removeClass('show');
        $('.mb-overlay').removeClass('show');
        
    })

    $('.mb-overlay').click(function(){

        $('.mobile-menu-canvas').removeClass('show');
        $(this).removeClass('show');
        
    })

    /* -- Floating Search Open > Close -- */

    $('.search-btn').click(function(){

        $('.floating-search').addClass('show');
        $('.floating-search-overlay').addClass('show');
        
    })

    $('.floating-search-overlay').click(function(){

        $('.floating-search').removeClass('show');
        $(this).removeClass('show');
        
    })

    /* -- Open > Close Dropdown Navigation -- */

    if (window.matchMedia('(min-width: 1024px)').matches) {
        $('.dropdown').hover(function(){
        $(this).find('> ul').slideToggle();
            })
    } else {
        $('.dropdown').click(function(){
            $(this).find('> ul').slideToggle();
            })
    }

})

/* -- Background Attribute Script -- */

$('[data-background]').each(function () {
    $(this).css('background-image', 'url(' + $(this).data('background') + ')');
});

/*-- Counter Number Script --*/

$('.counter-stats').each(function () {
    $(this).prop('Stats',0).animate({
        Stats: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

/* -- Skills Percentage Text -- */

$(document).ready(function(){
    var percentBar = $('.skills-percent').text();
  
  /* -- Skills Bar Width -- */ 
  
  $(".skills-bar-main").each(function () {
      $(this).animate(
        {
          width: percentBar+'%',
        },
        3000
      );
    });
    
    /* -- Skills Percentage Width -- */
  
    $(".skills-percent").each(function () {
      $(this).prop('Percent',0).animate(
        {
          width: percentBar+'%',
          Percent: $(this).text()
        },
        
        {
          duration: 3000,
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
        
    });
  
  });  
  })

/*-- Toggle FAQ --*/

$('.toggle-list').click(function(){
    $(this).find('> div.content-toggle').slideToggle();
    $(this).find('> div > h6 > button').toggleClass('tc-secondary')
    $(this).find('> div > h6 > button').toggleClass('')
    $(this).find('> div > h6 > button > i').toggleClass('down');
    $(this).find('> div > h6 > button > i').toggleClass('');
})