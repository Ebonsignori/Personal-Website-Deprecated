<!-- Delete Invoice Page -->

<html>
    <head>
        <title>Invoices In Files</title>
        <link rel='stylesheet' type='text/css' href='../css/main.css' />
    </head>

    <body>
        <div id="wrapper-thank-you" style="width: 75%;">

            <div id="header">Delete Invoice Page </div>
            <?PHP
            //Use unlink to delete invoice file, display error if unable
            if (unlink("./invoice" . $_POST['invoiceNumDel'] . ".txt")) {
                echo '<h2> Invoice Deleted Successfully </h2>';
            } else {
                echo '<h2> There was an error  deleting your file </h2>';
            }
            ?>	
            <!-- Naviagtion buttons to go back to other pages -->
            <div >
                <input class="thanks-button" style="min-width:200px;" type="button" 
                       onclick="location.href = 'viewfileinvoices.php';" 
                       value="Go Back to Invoice List" />
                </br>
                <input class="thanks-button" style="min-width:150px;" type="button"
                       onclick="location.href = '../index.html';" 
                       value="Create New Form" />
            </div>



        </div>

    </body>

</html>