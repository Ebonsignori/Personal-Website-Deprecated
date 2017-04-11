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

    <body>
       
        <h1> Contact Me </h1>
        <p id="contact-info"> Click <button onclick="showContactInfo()"> here</button> 
            to show contact info <p>
 
       <!-- Lookup Captcha Tutorial -->
       <form id="contact-form" style="display: block;" method="post" 
             action="contactsuccess"
             onsubmit="return validateForm()">
            <label> Name: </label>
            <input type="text" placeholder="Robin Pecknold" id="contact-name"  
                   name="name" style="display: block; width: 400px;"/>
            <label> Email: </label>
            <input type="email" placeholder="robinpecknold@gmail.com" 
                   style="width: 400px; display: block;" id="contact-email"/>
            <label> Message: </label>
            <textarea style="height: 200px; width: 400px; display: block;" 
                      placeholder="Your Message Here!" id="contact-msg"></textarea>
            <textarea style="display: none;" 
                      placeholder="If You Can See This. Please Leave It Blank... 
                      It's To Stop Bots." id="contact-trap"></textarea>
            <input type="submit" style="display: block;" />      
        </form>
        
        
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
        <script type="text/javascript" src="js/contact.js"> </script>
    </body>

</html>