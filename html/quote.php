<?php

    // configuration
    require("../includes/config.php"); 
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {  
     // Store the data inputted in quote_form.php in a variable
     $stock = lookup($_POST["symbol"]);
     
     // error checking  dump($stock);
     
      // if the lookup succeeds, then redirect the user to the page with the information
      render("quote_output.php", ["stock" => $stock]);
    }
    
    else
    {
        // else render form to enter input for a stock quote
        render("quote_form.php", ["title" => "Log In"]);
        
    }
    
 ?>
