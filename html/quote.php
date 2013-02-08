<?php

    // configuration
    require("../includes/config.php"); 
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {  
     // Store the data inputted in quote_form.php in a variable
     $stock = lookup($_POST["symbol"]);
     
     // can remove this as this is just displaying in the top left
     $foo = $stock['symbol'];
     echo $foo;
     
      // redirect("quote_output.php" ); 
      // stopping here, the redirect is not working.  Check it later
      render("quote_output.php", ["title" => "Quote"]);
        
     
     // if the lookup succeeds, then redirect the user to the page with the information
    }
    
    else
    {
        // else render form to enter input for a stock quote
        render("quote_form.php", ["title" => "Log In"]);
    }
    
 ?>
