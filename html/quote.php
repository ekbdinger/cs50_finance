<?php

    // configuration
    require("../includes/config.php"); 
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      // will insert other code here
      
     // Store the data inputted in quote_form.php ina  variable
     $stock = lookup($_POST["symbol"]);
     
     // if the lookup succeeds, then redirect the user to the page with the information
     // redirect("quote_output.php" );
     

    }
    
    else
    {
        // else render form to enter input for a stock quote
        render("quote_form.php", ["title" => "Log In"]);
    }
    
 ?>
