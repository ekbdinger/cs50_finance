<?php

    // configuration
    require("../includes/config.php");
    
    // testing some code here
    
    if (empty($_POST["username"]))
    {
        apologize("please fill out a username");
    }

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        
        // inserts a user into the database
        query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
        
        
        
         // check to see if the username is empty
         // if password fields are empty
         // if the password fields match
        
        // if $_POST["username"] or $_POST["password"] does not equal  $_POST["username"]
        // from my ekb_account2.php files
        // <?php if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["client"])      )
        
       
        
     
        
    }
    
    // I'm assuming that this is basically if something goes wrong do this
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }  
       /* if (empty($_POST["username"])
            {
            echo "Please fill out all of the fields.";
            }
            
       */
    

?>
