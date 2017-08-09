/* Expanding Menu START */
var navMenuContainer = $('.nav-menu-container');
var stickToBot = $(window).height() - navMenuContainer.outerHeight(true);
var fixedMenu = false;
var menuState = false;  // False = closed, true = open

/* Nav Menu Readjust on Scroll-Past */
$(window).scroll(function() {
   var scrollVal = $(this).scrollTop();
   // Fix Menu To Top Right of Page and Rotate it 270deg
    if ( scrollVal > stickToBot && navMenuContainer.css("position") != "fixed") {
        fixedMenu = true;
        navMenuContainer.fadeOut("fast", function() {
        $('#menu-placeholder').css({'display':'block'})
        navMenuContainer.css({'position':'fixed','top' :'0px', 'right': '0px'});
        navMenuContainer.addClass('flip-270');
        if (menuState == true) {
          menuState = !menuState;
          $('.menu').toggleClass('expanded');
          $( 'span' ).toggleClass('hidden-menu-item');
          $('.menu-container , .toggle').toggleClass('close-menu');
        }
        $('.toggle').addClass('flip-90');
        navMenuContainer.fadeIn("fast");
      });

    // Move Menu Back To Initial Location
    } else if (scrollVal < stickToBot && navMenuContainer.css("position") == "fixed") {
        fixedMenu = false;
        navMenuContainer.fadeOut("fast", function() {
        $('#menu-placeholder').css({'display':'none'})
        navMenuContainer.css({'position':'static', 'top' :'initial', 'right': 'initial'});
        navMenuContainer.removeClass('flip-270');
        if (menuState == true) {
          menuState = !menuState;
          $('.menu').toggleClass('expanded-fixed');
          $( 'span' ).toggleClass('hidden-menu-item');
          $('.menu-container , .toggle').toggleClass('close-menu');
        }
        $('.toggle').removeClass('flip-90');
        navMenuContainer.fadeIn("fast");
      });
    }
});

/* Menu Toggle */
  $('.toggle').on('click', function() {
    menuState = !menuState;
    if (!fixedMenu) {
      $('.menu').toggleClass('expanded');
      $( 'span' ).toggleClass('hidden-menu-item');
      $('.menu-container , .toggle').toggleClass('close-menu');
    } else {
      $('.menu').toggleClass('expanded-fixed');
      $( 'span' ).toggleClass('hidden-menu-item');
      $('.menu-container , .toggle').toggleClass('close-menu');
    }
  });

/* END EXPANDING MENU */
