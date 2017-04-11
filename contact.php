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
        <h1> Get in touch </h1>
        <p id="contact-info"> Click <button onclick="showContactInfo()"> here</button> 
            to show contact info <p>
 
       <!-- Lookup Captcha Tutorial -->
       <form id="contact-form" style="display: block;" action="javascript:0">
            <label> Your Name: </label>
            <input type="text" value="John Lennon"  style="display: block; width: 400px;"/>
            <label> Your Email: </label>
            <input type="email" value="youremail@domain.com" style="width: 400px; display: block;" />
            <label> Your Message: </label>
            <input type="text" style="height: 200px; width: 400px; display: block;" />
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
                
        
        
        <script>
            
            function showContactInfo() {
                document.getElementById('contact-info').innerHTML =
   /*And Some More */"Email: Eva" + "n" + "abonsig" +//Random Comments For Parsing Errors
      /*And Some More */"nor" +//Random Comments For Parsing Errors
  /*And Some More */"i@gm" +//Random Comments For Parsing Errors
      /*And Some More */"ail" + //Random Comments For Parsing Errors
      /*And Some More */".com" //Random Comments For Parsing Errors
  /*And Some More */ +  "<br />" +//Random Comments For Parsing Errors
      /*And Some More */ "Ph"+ "on" //Random Comments For Parsing Errors
      /*And Some More */+ "e Nu" //Random Comments For Parsing Errors
     /*And Some More */+ "mber" //Random Comments For Parsing Errors
            /*And Some More */ + ": (9" //Random Comments For Parsing Errors
       /*And Some More */   + "12-" //Random Comments For Parsing Errors
               /*And Some More */ + "50" //Random Comments For Parsing Errors
   /*And Some More */  + "8-3" //Random Comments For Parsing Errors
            /*And Some More */ + "345" //Random Comments For Parsing Errors
  /*And Some More */+ ") <br />";//Random Comments For Parsing Errors
            } 
        </script>
    </body>

</html>