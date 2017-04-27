// Useless

//For uselesssite.html
function chooseSite() {
   var iframe = document.getElementById('frame');
   iframe.src = siteList[Math.floor(Math.random() * sitesList.length)];
}


var siteList = [
  ['http://isfycsmn.ytmnd.com/'],
  ['http://yeahboi.me/'],
  ['http://adultcatfinder.com/']
  ['http://heeeeeeeey.com/'],
  ['http://thatsthefinger.com/'],
  ['http://cant-not-tweet-this.com/'],
  ['http://weirdorconfusing.com/'],
  ['http://eelslap.com/'],
  ['http://www.staggeringbeauty.com/'],
  ['http://burymewithmymoney.com/'],
  ['http://endless.horse/'],
  ['http://www.fallingfalling.com/'],
  ['http://ducksarethebest.com/'],
  ['http://www.trypap.com/'],
  ['http://www.republiquedesmangues.fr/'],
  ['http://www.movenowthinklater.com/'],
  ['http://www.partridgegetslucky.com/'],
  ['http://www.rrrgggbbb.com/'],
  ['http://beesbeesbees.com/'],
  ['http://www.sanger.dk/'],
  ['http://www.koalastothemax.com/'],
  ['http://www.everydayim.com/'],
  ['http://www.leduchamp.com/'],
  ['http://r33b.net/'],
  ['http://randomcolour.com/'],
  ['http://cat-bounce.com/'],
  ['http://www.sadforjapan.com/'],
  ['http://www.taghua.com/'],
  ['http://chrismckenzie.com/'],
  ['http://hasthelargehadroncolliderdestroyedtheworldyet.com/'],
  ['http://ninjaflex.com/'],
  ['http://iloveyoulikeafatladylovesapples.com/'],
  ['http://ihasabucket.com/'],
  ['http://corndogoncorndog.com/'],
  ['http://www.ringingtelephone.com/'],
  ['http://www.pointerpointer.com/'],
  ['http://imaninja.com/'],
  ['http://willthefuturebeaweso.me/'],
  ['http://www.ismycomputeron.com/'],
  ['http://www.nullingthevoid.com/'],
  ['http://www.muchbetterthanthis.com/'],
  ['http://www.ouaismaisbon.ch/'],
  ['http://www.yesnoif.com/'],
  ['http://iamawesome.com/'],
  ['http://www.pleaselike.com/'],
  ['http://crouton.net/'],
  ['http://corgiorgy.com/'],
  ['http://www.electricboogiewoogie.com/'],
  ['http://www.wutdafuk.com/'],
  ['http://unicodesnowmanforyou.com/'],
  ['http://www.crossdivisions.com/'],
  ['http://tencents.info/'],
  ['http://intotime.com/'],
  ['http://leekspin.com/'],
  ['http://www.patience-is-a-virtue.org/'],
  ['http://whitetrash.nl/'],
  ['http://www.theendofreason.com/'],
  ['http://zombo.com'],
  ['http://pixelsfighting.com/'],
  ['http://baconsizzling.com/'],
  ['http://isitwhite.com/'],
  ['http://onemillionlols.com/'],
  ['http://www.omfgdogs.com/'],
  ['http://oct82.com/'],
  ['http://semanticresponsiveillustration.com/'],
  ['http://chihuahuaspin.com/'],
  ['http://potato.io/'],
  ['http://www.blankwindows.com/'],
  ['http://www.biglongnow.com/'],
  ['http://dogs.are.the.most.moe/'],
  ['http://tunnelsnakes.com/'],
  ['http://www.infinitething.com/'],
  ['http://www.trashloop.com/'],
  ['http://www.ascii-middle-finger.com/'],
  ['http://www.coloursquares.com/'],
  ['http://spaceis.cool/'],
  ['https://thebigdog.club/'],
  ['http://buildshruggie.com/'],
  ['http://buzzybuzz.biz/'],
  ['http://yeahlemons.com/'],
  ['http://burnie.com/'],
  ['http://www.sealspin.com/']
];

var usedVideoList = ["q6EoRBvdVPQ", "-w-58hQ9dLk"];

//For uselessvideo.html
function chooseVideo(occurance) {
  vid = videoList[Math.floor(Math.random() * videoList.length)];
  if (occurance === 0) {
    usedVideoList.push(vid);
    return vid.toString();
  } else if (usedVideoList.length-1 == videoList.length) {
      usedVideoList = [];
      return vid.toString();
   }  else if (usedVideoList.indexOf(vid) > -1) {
     chooseVideo(1);
   } else {
     usedVideoList.push(vid);
     return vid.toString();
   }
}

var videoList = [
  ["q6EoRBvdVPQ"],
  ["-w-58hQ9dLk"],
  ["zoYS005VsA4"],
  ["jEcuFIU7Cb0"]
];

//Youtube API
// 2. This code loads the IFrame Player API code asynchronously.
     var tag = document.createElement('script');

     tag.src = "https://www.youtube.com/iframe_api";
     var firstScriptTag = document.getElementsByTagName('script')[0];
     firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

     // 3. This function creates an <iframe> (and YouTube player)
     //    after the API code downloads.
     var player;
     function onYouTubeIframeAPIReady() {
       player = new YT.Player('player', {
         height: '100%',
         width: '100%',
         videoId: chooseVideo(0),
         events: {
           'onReady': function() {
             player.setVolume(100);
             player.playVideo();
           },
           'onStateChange': onPlayerStateChange
         }
       });
     }
     // Play new random video when previous one finishes
     function onPlayerStateChange(event) {
       if (player.getPlayerState() === 0) {
         player.loadVideoById(chooseVideo(1),0,"large");
       }
      }

      function changeVideo() {
         player.loadVideoById(chooseVideo(1),0,"large");
      }
