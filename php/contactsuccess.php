<!-- Ebonsignori Contact Success Page -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, 
              user-scalable=no" />
        <meta name="url" content="https://ebonsignori.com/contactsuccess">
        <meta name="rating" content="General">

        <title> Contact Success </title>
        <meta name="author" content="Evan Bonsignori">
        <meta name="description" content="About Evan Bonsignori">

        <!-- Open Graph Data -->
        <meta property="og:image" content="../img/grid.jpg">
        <meta property="og:description" content="About Evan Bonsignori">
        <meta property="og:title" content="Ebonsignori">
        
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <p> why </p>
        <?php 
            echo '<p> wat </p>';
            if (isset($_POST('name'))) {
             $to = "evanbonsignori@yahoo.com";
             $subject = "MessageFromEbonsignori.com";   
             $message = $_POST('name');
             mail($to,$subject,$message);
             echo '<p> Your message was sent! </p>';
            } else {
                echo "<p> Your message wasn't sent. Please try again later </p>";
                mail("evanbonsignori@yahoo.com", "send Error", "Error");
            }
         ?>
    </body>