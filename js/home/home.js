$(window).on('load', function () {
  $('#background-slider').css('background-image', "url('img/homepage_backgrounds/background (2).png')");
 });

var circleText = $('.circle-text span');
$('.circle-text-seperator').click(function() {
  if (circleText.css('animation-play-state') == 'running') {
    circleText.css({'animation-play-state' : 'paused'});
    $(this).removeClass('go');
    $(this).css({'animation' : 'pulse 3s infinite'});
    $(this).removeClass('pulse-grow');
    $(this).removeClass('bb');
    $(this).addClass('stop');
  } else {
    circleText.css({'animation-play-state' : 'running'});
    $(this).removeClass('stop');
    $(this).css({'animation' : 'none'});
    $(this).addClass('go');
    $(this).addClass('pulse-grow');
    $(this).addClass('bb');
  }
});

$('#triangle').css("top", $('#background-slider').height()-70 + "px");

 /*
  // Initalize background image 2D array, the second column to prevent repeats during cycle
  var imagesArray;
  imagesArray = [['../img/homepage_backgrounds/background (2).png', false]];
  for (i = 1; i < 3; i++) {
    imagesArray.push(['img/homepage_backgrounds/background (' + i + ').png',false]);
  }
  cycleBackground();

  setInterval(cycleBackground, 5000);
  */

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

  centerProfile(); // Load and center profile picture and buttons

$(window).resize(function() {
  $('#triangle').css("top", $('#background-slider').height()-70 + "px");
  centerProfile();
});

// Select all links with hashes and add smoothscroll
$('a[href*="#"]').on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
});


/* Cycles through backgrounds in imageArray randomly */
function cycleBackground(){
  $("#background-slider").css("background","url('"+ randomImage() +"')");

  function randomImage() {
    if (!hasCycled()) {
      while (true) {
        randomPick = Math.floor(Math.random() * imagesArray.length);
        if (imagesArray[randomPick][1] !== true) {
          imagesArray[randomPick][1] = true;
          return imagesArray[randomPick][0].toString();
        }
      }
    } else {
      resetImages();
      return randomImage();
    }
  }

  //Checks to see if every video in sitesList has been played
  function hasCycled() {
      for (i = 0; i < imagesArray.length; i++) {
        if (!imagesArray[i][1]) {
          return false;
        }
      }
      return true;
  }

  //Resets all booleans in sitesList to false to reset played
  function resetImages() {
    for (i = 0; i < imagesArray.length; i++) {
      imagesArray[i][1] = false;
    }
  }
}

//Centers profile image and the four buttons around it
function centerProfile() {
  var radius = 150;
  var profileImage =   $('.profile-image');
  var losangeImage = $('.losange');
  var circlingText = $(".circle-text-container");
  var profileBtns = $('.profile-button')
  var container = $('#background-slider'), width = container.width(), height = container.height();
  var angle = (3/4)*Math.PI, step = (2*Math.PI) / profileBtns.length;
  var rotateAngle = (5/4)*Math.PI, rotateStep = Math.PI/2

  profileBtns.each(function() {
  var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
  var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);

  // Center Buttons
  $(this).css({
      left: x + 'px',
      top: y + 'px',
      'transform' : 'rotate(' + rotateAngle + 'rad)'
  });
  angle += step;
  rotateAngle += rotateStep;

  // Center profile image
  profileImage.css({
    left: Math.round(width/2 - losangeImage.width()/2 + 7) + 'px',
    top: Math.round(height/2 - losangeImage.height()/2) + 'px'
  });

  // Center circling text
  circlingText.css({
    left: Math.round(width/2 - circlingText.width()/2 + 110) + 'px',
    top: Math.round(height/2 - circlingText.height()/2 - 325) + 'px'
  });
});
}


/* Contact Info */
//On click of id=contact-info displays my email an phone number. Code tries to
// disguise my information from bots.
function showContactInfo() {
      var info =
            /*And2 Some More */"<div><p> Email: </p> <p><a h" +
       /*Comment Mid Pase */  "re" + "f='ma" + "i" + "lto:ev" /*Comment Mid
        *  Pase */ + "an" + "abo" +/*@gmail.com */ /*Gotcha.com */
    "nsi" + "gn" + /*Comment Mid Pase */ "o" + "ri@gm" + "ail" + ".com"
            + "'> E" + "va" + "n" + "abonsig" + //Random Comment
            /*And31 Some More */"nor" + //Random Comments For Parsing Errors52
            /*And4 gseio@yahoo.com Some More */"i@gm" + //Random
            //Comments For Email: fauwkwi@yahoo.com Parsing Errors724
   /*And Some More */"ail" + //Random Comments For Parsing Errors24822
            /*And Some More */".com </a> </p> " //Random Comments For Parsing Errors24232
  /*And Some More */ + //Random Comments For Parsing Errors
            /*And Some More */ "<p> Ph" + "on" //Random Comments For Parsing Errors
  /*And Some More */ + /*@gmail.com */ "e Nu" //Random Comments For Parsing Errors646
            /*And Some More */ + "mber" //Random Comments For Parsing Errors326
            /*And Some More */ + ": </p><p><a href='tel:1-9" + "12"
                    + "-5"
                    + "0" + "8-3" + "34"
                    + "5 ' > (9"
            /*And Some More */ + "1" + /*Phone: (921)-555-5256 */
            "2-" //Random Comments For Parsing Errors245
            /*And Some More */ + "50" //Random Comments For Parsing Errors25624
            /*And Some More */ + "8-3" //Random Comments For Parsing Errors854
            /*And Some More */ + "345" //Random Comments For Parsing Errors24523
            /*And Some More */ + ") </a> </p> </div>";//Random Comments
            //For Parsing Errors

            $('#contact-show').fadeOut("slow", function(){
              $('#contact-show').html(info);
              $('#contact-show').fadeIn("slow");
            });
}
