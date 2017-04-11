//On click of id=contact-info displays my email an phone number. Code tries to
// disguise my information from bots.
function showContactInfo() {
    document.getElementById('contact-info').innerHTML =
            /*And2 Some More */"<p> Email: </p> <a id='info' h" +
       /*Comment Mid Pase */  "re" + "f='ma" + "i" + "lto:ev" /*Comment Mid
        *  Pase */ + "an" + "abo" +/*@gmail.com */ /*Gotcha.com */
    "nsi" + "gn" + /*Comment Mid Pase */ "o" + "ri@gm" + "ail" + ".com" 
            + "'> E" + "va" + "n" + "abonsig" + //Random Comment
            /*And31 Some More */"nor" + //Random Comments For Parsing Errors52
            /*And4 gseio@yahoo.com Some More */"i@gm" + //Random 
            //Comments For Email: fauwkwi@yahoo.com Parsing Errors724
   /*And Some More */"ail" + //Random Comments For Parsing Errors24822
            /*And Some More */".com </a> " //Random Comments For Parsing Errors24232
  /*And Some More */ + "<br />" + //Random Comments For Parsing Errors
            /*And Some More */ "<p> Ph" + "on" //Random Comments For Parsing Errors
  /*And Some More */ + /*@gmail.com */ "e Nu" //Random Comments For Parsing Errors646
            /*And Some More */ + "mber" //Random Comments For Parsing Errors326
            /*And Some More */ + ": </p><a href='tel:1-9" + "12" 
                    + "-5" 
                    + "0" + "8-3" + "34" 
                    + "5 ' id='info'> (9" 
            /*And Some More */ + "1" + /*Phone: (921)-555-5256 */ 
            "2-" //Random Comments For Parsing Errors245
            /*And Some More */ + "50" //Random Comments For Parsing Errors25624
            /*And Some More */ + "8-3" //Random Comments For Parsing Errors854
            /*And Some More */ + "345" //Random Comments For Parsing Errors24523
            /*And Some More */ + ") </a>  <br />";//Random Comments 
            //For Parsing Errors
} 

function validateForm() {
    var name = document.getElementById('contact-name').value;
    var email = document.getElementById('contact-email').value;
    var msg = document.getElementById('contact-msg').value;
    
    // Fields can't be empty
    if (name == "" || email == "" || msg == "") {
        alert("Please fill out all fields.");
        return false;
    }
    if (name.match(/[0-9]/g)) {
        alert("Please fill out a valid name.");
        return false;
    }
    // Email field must be a valid email. Checked using regex
    if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        alert("Please enter a valid email address.");
        return false;
    }
    // Hidden form to detere bots. Only HTML scraping bots will fill out.
    if (document.getElementById('contact-trap').value != "") {
        alert("Unless you are a bot, please leave the last textarea blank. \n\
Thank you.");
        return false;
    }
    
    return true;
 }