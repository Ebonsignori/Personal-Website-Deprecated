var imagesArray = [["../img/sky.jpg", false]];

$(document).ready(function () {
  //Set the starting background
  randomIndex = Math.floor(Math.random() * 28);
  $("#background-slider").css("background","url('../img/homepage_backgrounds/background ("+ randomIndex.toString() +").jpg')");

  cycleBackgroundInit(); // Rotate background images behind profile picture

  setInterval(cycleBackground, 8000);
  centerProfile(); // Load and center profile picture and buttons

$(window).resize(function() {
  centerProfile();
});

});

/* Initalizes the image array from directory contents */
function cycleBackgroundInit() {
  /* Retrieve all images from backgrounds directory */
  var dir = "../img/homepage_backgrounds/";
  var fileExtension = ".jpg";

  $.ajax({
      //This will retrieve the contents of the folder if the folder is configured as 'browsable'
      url: dir,
      success: function (data) {
          //List all .jpg file names in the page
          $(data).find("a:contains(" + fileExtension + ")").each(function () {
              var filename = this.href.replace(window.location.host, "").replace("http://", "");
              // 2D Array to indicate that background hasn't been used
              imagesArray.push([dir.toString() + filename.toString(), false]);
          });
      }
  });
}

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
  function resetPlayed() {
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
  var profileBtns = $('.profile-button'), container = $('#background-slider'), width = container.width(), height = container.height();
  var angle = (3/4)*Math.PI, step = (2*Math.PI) / profileBtns.length;
  var rotateAngle = (5/4)*Math.PI, rotateStep = Math.PI/2

  profileBtns.each(function() {
  var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
  var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);

  $(this).css({
      left: x + 'px',
      top: y + 'px',
      'transform' : 'rotate(' + rotateAngle + 'rad)'
  });
  angle += step;
  rotateAngle += rotateStep;

  profileImage.css({
    left: Math.round(width/2 - losangeImage.width()/2 + 7) + 'px',
    top: Math.round(height/2 - losangeImage.height()/2) + 'px'
  });
});
}
