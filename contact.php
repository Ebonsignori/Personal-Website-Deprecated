<!DOCTYPE html>
<!-- Ebonsignori Contact Page -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,
              user-scalable=no" />
        <meta name="url" content="https://ebonsignori.com/contact">
        <meta name="rating" content="General">

        <title> Contact Evan Bonsignori</title>
        <meta name="author" content="Evan Bonsignori">
        <meta name="description" content="Reach Evan Bonsignori by leaving a message, or view his phone number and email address.">

        <!-- Open Graph Data -->
        <meta property="og:image" content="img/open_graph/contact.jpg">
        <meta property="og:description" content="Reach Evan Bonsignori by leaving a message, or view his phone number and email address.">
        <meta property="og:title" content="Contact Evan Bonsignori">

        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Favicon Icon made by http://www.freepik.com from www.flaticon.com -->
        <link rel="icon" type="image/png" href="img/favicons/id-card.png" />
      </head>

      <body class="bg-triangle">

        <!-- Navbar Content -->
        <nav id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="index" class="home">Evan Bonsignori</a>
          <a href="blog" >Blog</a>
          <a href="portfolio" >Portfolio</a>
          <a href="about" >About</a>
          <a href="contact" class="active">Contact</a>
        </nav>

        <!-- Navbar Icon -->
        <span class="sidenav-icon" onclick="openNav()">&#9776;</span>

          <! -- Page Content -->
          <div class="dim">

        <!-- Page Heading -->
        <div class="content-center-children" style="margin-bottom: -20px;">
        <h1> Contact Me </h1>
        </div>

        <!-- Contact info hidden in javascript to prevent spam bots -->
        <div id="contact-show">
        <p> Click for contact info: <br />
            <button class="bt"
            onclick="showContactInfo()">My Information</button></p>
        </div>

        <!-- Contact Form -->
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
                   maxlength="40" name="email"/>
            <label> Message: </label>
            <textarea style="height: 200px; display: block;"
                      placeholder="Your Message Here!" id="contact-msg"
                      maxlength="1000" name="msg"></textarea>
            <textarea style="display: none;"
                      placeholder="If You Can See This. Please Leave It Blank...
                      It's To Stop Bots." id="contact-trap"></textarea>
            <input id="bt" type="submit" style="display: block;" />
        </form>
        </div>

        <!-- Process input and email -->
        <div class="content-center-children">
        <?php
        if (isset($_POST["name"])) {
            $to = "evanabonsignori@gmail.com";
            $subject = "MessageFromEbonsignori.com";
            $message = "Name: " . $_POST["name"] . "\n\nEmail: " . $_POST["email"]
                    . "\n\nMessage:\n" . $_POST["msg"];
            if (mail($to, $subject, $message)) {
                echo '<p> Your message has been sent! </p>';
            } else {
                echo '<p> Failed to send message.</p>';
            }
        }
        ?>
        </div>

        <!-- Social Media Icons -->
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

        <!-- Home Naviagation -->
        <div class="home">
            <button class="fa fa-home" onclick="location.href = 'index'">Home</button>
        </div>

      <!-- Dim wrapper -->
      </div>

      <!-- Js and Jquery -->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/contact.js"></script>
      <script type="text/javascript" src="js/main.js">  </script>
    </body>

</html>
