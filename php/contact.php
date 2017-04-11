<!-- Ebonsignori Contact Page -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, 
              user-scalable=no" />
        <meta name="url" content="https://ebonsignori.com/contact">
        <meta name="rating" content="General">

        <title> Contact </title>
        <meta name="author" content="Evan Bonsignori">
        <meta name="description" content="About Evan Bonsignori">

        <!-- Open Graph Data -->
        <meta property="og:image" content="img/evan_running_waterfall.jpg">
        <meta property="og:description" content="Contact Evan Bonsignori">
        <meta property="og:title" content="Ebonsignori">

        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" 
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="bg-triangle">
        <div class="content-center-children" style="margin-bottom: -25px;">
        <h1> Contact Me </h1>
        </div>
        <div id="contact-show" />
        <p id="contact-info" class="before"> Click for contact info: <br />
            <button class="bt" 
            onclick="showContactInfo()">My Information</button> <p>
        </div>
            
        <div id="contact-form">     
        <form style="margin:auto;" method="post" action="contact"
              onsubmit="return validateForm()">
            <label> Name: </label>
            <input type="text" placeholder="Robin Pecknold" id="contact-name"  
                   name="name" style="display: block;" 
                   maxlength="40"/>
            <label> Email: </label>
            <input type="email" placeholder="robinpecknold@gmail.com" 
                   style="display: block;" id="contact-email" 
                   maxlength="40"/>
            <label> Message: </label>
            <textarea style="height: 200px; display: block;" 
                      placeholder="Your Message Here!" id="contact-msg" 
                      maxlength="1000"></textarea>
            <textarea style="display: none;" 
                      placeholder="If You Can See This. Please Leave It Blank... 
                      It's To Stop Bots." id="contact-trap"></textarea>
            <input id="bt" type="submit" style="display: block;" />      
        </form>
        </div>
        <?php
        if (isset($_POST["name"])) {
            $to = "evanabonsignori@gmail.com";
            $subject = "MessageFromEbonsignori.com";
            $message = "Name: " . $_POST["name"] . "Email: " . $_POST["email"]
                    . "Message: " . $_POST["msg"];
            mail($to, $subject, $message);
            echo '<p> Your message has been sent! </p>';
        }
        ?>



        <ul class="icons">
            <li><a href="https://www.facebook.com/ebonsignori">
                    <span class="fa fa-facebook"></span></a></li>
            <li><a href="https://github.com/Ebonsignori">
                    <span class="fa fa-github"></span></a></li>
            <li><a href="https://www.linkedin.com/in/evan-bonsignori-33167787">
                    <span class="fa fa-linkedin"></span></a></li>
            <li><a href="https://www.instagram.com/ebonsignori/">
                    <span class="fa fa-instagram"></span></a></li> 
        </ul>


        <div class="home">
        <span>
            <button class="fa fa-home" onclick="location.href = '../index'">Home</button>
        </span>
        </div>

        <script type="text/javascript" src="../js/contact.js"></script>
    </body>

</html>