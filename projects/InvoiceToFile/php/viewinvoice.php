<!-- View Stored Invoice 
HTML code is nearly identical to index.html with textarea tags replaced with
uneditable div tags. Content of div tags are read in from file stored on the server
and sent to this page using php. The content is processed in javaScript and inserted 
into each HTML div tage.-->
<!DOCTYPE html>

<head>
    <title>Stored Invoice</title>
    <link rel='stylesheet' type='text/css' href='../css/main.css' />
</head>

<body onload="javascript:onLoad()">
    <!-- Wrapped just like index.html -->
    <div id="wrapper">
        <!-- 
        If unable to load from file or database, all values will be "NULL"
        -->
        <div id="header">NULL</div>

        <div id="identity"> 
            <div class="address" >NULL</div> 
            </br>
            <div class="address" >NULL</div>
            </br>
            <div class="address" >NULL</div>  
            </br>
            <div class="address" >NULL</div> 
            </br>
            </br>               
        </div>  

        <div id="customer">

            <table class="tables"> 
                <tr>
                    <td class="title">Invoice #</td> 
                    <td><div class="titles">NULL</div></td> 
                </tr>  
                <tr> 

                    <td class="title">Date</td>
                    <td><div class="titles" id="date">NULL</div></td>
                </tr>
                <tr>
                    <td class="title">Amount Due</td>
                    <td><div class="titles" id="due1">NULL</div></td>
                </tr> 

            </table>

        </div>

        <div id="invoice">Invoice</div> 

        <table id="items">

            <tr>
                <th>Item</th>
                <th>Description</th>
                <th>Unit Cost</th> 
                <th>Quantity</th>
                <th>Price</th>
            </tr>

            <tr class="item-row">
                <td class="item-name">
                    <div class="nameitem">NULL</div>
                </td>

                <td class="description">
                    <div class="namedescription">NULL</div>
                </td>
                <td><div class="cost" >NULL</div></td>

                <td><div class="qty" >NULL</div></td> 

                <td><span class="price">NULL</span></td>
            </tr> 
        </table>

        <div id="options"> 

            <div id="actionbuttons">
                <!-- Buttons delete or redirect to new form-->
                <form id="invoice'.$fileNum.'Delete" name="invoiceSelect" 
                      method="post" action="deleteinvoice.php" 
                      style="margin-right: 15px;"> 
                    <input type="hidden"  name="invoiceNumDel" 
                           value="<?php echo $_POST['invoiceNum']; ?>" />
                    <input type="submit" style="width: 100%; 
                           display: inline-block;" class="thanks-button" 
                           value="Delete Invoice <?php
                           echo $_POST['invoiceNum'];
                           ?>" />
                </form> 
                <form style="margin-right: 15px;">
                    <input class="thanks-button" style="width: 100%; 
                           display: inline-block;" type="button"
                           onclick="location.href = '../index.html';" 
                           value="Create New Form" />
                </form>
            </div>

            <div id="viewdata">
                <a href="viewdbinvoices.php" > View Invoices from Database </a>
                </br>
                <a href="viewfileinvoices.php" > View Invoices from file </a>
            </div>

        </div>

        <table style="float:right; ">
            <tr>
                <td colspan="2">Tax %</td>
                <td ><div class="sumTable" >NULL</div></td>
            </tr>
            <tr>
                <td colspan="2">SubTotal</td>
                <td><div class ="totals">NULL</div></td>
            </tr>
            <tr>
                <td colspan="2" >Total</td>
                <td><div class ="totals" >NULL</div></td> 
            </tr>
            <tr>
                <td colspan="2">Amount Paid</td>
                <td ><div class="sumTable">NULL</div></td>
            </tr>
            <tr style="background: #eee; ">
                <td colspan="2">Balance Due</td>
                <td><div class ="totals" >NULL</div></td>
            </tr>

        </table>
        </br>
        </br>
        </br>
        </br>
        <h2 id="status" style="color: red; font-style: italic;"> Status </h2>
    </div>
    <!-- 
    Gets contents from file and passes them to javascript for 
   parsing/decoding. The viewInvoice function populates each div element. 
    --> 
    <script>
        function onLoad() {
            var everything = "<?php
                           echo file_get_contents('invoice' . $_POST['invoiceNum'] . '.txt');
                           ?>";
            viewInvoice(everything);
        }
    </script>
    <script type='text/javascript' src='../js/viewinvoice.js'></script>
    
</body>

</html>