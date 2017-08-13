/* Stick taskbar to top of div */
$('#upper').each(function(){

  var $that = $(this),
      $page = $that.closest('#shell');

  $page.scroll(function(){
    $that.css({top: this.scrollTop});
  });

});

// Remove filler text on click
$("#filler").click(function(){
    $(this).remove();
});

/* On enter key, cycle through commands */
$('#main').keyup(function(e) {
   if(e.keyCode == 13){
     // Commands
     switch($('#query').text().toLowerCase()) {
       // About Introduction
       case "whoami":
       case "who is evan?":
       case "who are you?":
       case "who is evan bonsignori?":
       case "tell me about yourself":
         OutputQuery("My name is Evan Bonsignori and I\'m a <strong>computer scientist in training</strong> (<em>aka Student</em>). <br /> I began and completed my studies in electical engineering up to an associates, but found the little MATLAB programming we used to be the most rewarding aspect of my engineering courses. Thus, I tested out an online Python class and haven\'t stopped programming since. I plan to graduate with a bachelors in computer science accompanied by a minor in mathematics by 2018. Until then <strong> this website and its portfolio contents are a work in progress. </strong>");
         break;
       // List Commands
       case "help":
       case "?":
       case "what?":
       case "commands":
       case "compgen -c":
         OutputQuery("Commands Supported: <br> whoami ls cd history mail help clear (or clc) reset close man");
         break;
       // Clear Terminal
       case "clear":
       case "clc":
       case "clean":
          ClearTerminal();
          break;
       // Uname
       case "uname":
       case "hostname":
       case "uname -a":
       case "what is this site?":
          OutputQuery("Here I <a href=\"blog\"> publicly practice writing</a> in a domain that consists of technical tutorials, politcs, humor, and other unsorted meanderings. I also host both my professional and course work here in my <a href=\"#portfolio\">portfolio</a>.");
          break;
       // History
       case "history":
       case "are you a web developer?":
         OutputQuery("I didn't know what an HTML tag looked like until March of 2017! Since, I've referenced hundreds of resources, pages of documentation, and a Django Udemy course to learn the basics of full stack web development. Though my other work isn't as \"from scratch\" as this site, you can <a href=\"#portfolio\"> check out my budding Portfolio.</a>");
         break;
       // ls
       case "ls":
       case "ls -a":
       case "ls -al":
       case "ls -l":
       case "ls -la":
         OutputQuery("[Like most commands in this terminal, this isn't an accurate ls command, however, you can cd to any 'directory' if you'd like, or simply click on them] <br> <ul> <li><a href=\"https://ebonsignori.com/#about-section\">. </li> <li>..</li> <li><a href=\"#background-slider\">home</li> <li><a href=\"blog\">blog</li> <li><a href=\"#portfolio\">portfolio</li> <br> <li><a href=\"#contact-section\">contact</li>  <li><a href=\"https://www.facebook.com/ebonsignori\">facebook</li> <li><a href=\"https://github.com/Ebonsignori\">github</li> <li><a href=\"https://www.linkedin.com/in/evan-bonsignori-33167787\">linkedin</li> <li><a href=\"https://www.instagram.com/ebonsignori/\">instagram</li> <br> <li><a href=\"acknowledgements\">acknowledgements</li> </ul>");
         break;
       // Find, contact Info
       case "contact":
       case "contact info":
       case "find . -name \"Evan Bonsignori\"":
       case "find":
       case "find evan":
       case "find evan bonsignori":
          OutputQuery(" Email: <a href=\"mailto:evanabonsignori@gmail.com\"> Evanabonsignori@gmail.com </a> <br> Phone Number: <a href=\"tel:1-912-508-3345\"> (912-508-3345) </a>");
         break;
       // Default
       default:
         OutputQuery("Please enter a valid command. <br> Type \"help\" or \"commands\" for list of valid commands.");
     } // End Switch
   } // End If
}); // End Function

function OutputQuery(input) {
  $('.enter').last().append(input + "<br>");
  NewQuery();
  return;
}

function NewQuery() {
  $('#query').attr('contenteditable','false');
  $('#query').removeAttr('id');
  $('#main').append("<span class=\"fore\">about@ebonsignori.com</span>:<span class=\"accent\"> $ </span>");
  $('#main').append("<div class=\"enter\" id=\"query\" contenteditable=\"true\"></div>");

  /* Scroll to bottom of terminal */
  var outerTop = $('#shell').scrollTop();
  var outerBottom = outerTop + $('#shell').height();
  var innerTop = $('#main')[0].offsetTop;
  var innerBottom = innerTop + $('#main').height();
  if (innerBottom > outerBottom)
  $('#shell').scrollTop(innerBottom - $('#shell').height() + 7);

  /* Set textcursor focus */
  var div = document.getElementById("query");
  div.onfocus = function() {
      window.setTimeout(function() {
          var sel, range;
          if (window.getSelection && document.createRange) {
              range = document.createRange();
              range.selectNodeContents(div);
              range.collapse(true);
              sel = window.getSelection();
              sel.removeAllRanges();
              sel.addRange(range);
          } else if (document.body.createTextRange) {
              range = document.body.createTextRange();
              range.moveToElementText(div);
              range.collapse(true);
              range.select();
          }
      }, 1);
  };
  div.focus();

  return;
}

function ClearTerminal() {
  $('#main').html("<span class=\"fore\">about@ebonsignori.com</span>:<span class=\"accent\"> $ </span> <div class=\"enter\" id=\"query\" contenteditable=\"true\"></div>");
  $('#main:after').css('content','');
   /* Set textcursor focus */
  var div = document.getElementById("query");
  div.onfocus = function() {
      window.setTimeout(function() {
          var sel, range;
          if (window.getSelection && document.createRange) {
              range = document.createRange();
              range.selectNodeContents(div);
              range.collapse(true);
              sel = window.getSelection();
              sel.removeAllRanges();
              sel.addRange(range);
          } else if (document.body.createTextRange) {
              range = document.body.createTextRange();
              range.moveToElementText(div);
              range.collapse(true);
              range.select();
          }
      }, 1);
  };
  div.focus();
}

function ResetTerminal() {

}
