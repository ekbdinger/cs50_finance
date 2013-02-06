<?php

    // configuration
    require("../includes/config.php");
    
  
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        
        if ( empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["confirmation"]) )
        {
        apologize("please fill out all of the fields");
        }
        
        // inserts a user into the database
        query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
         
    }
   
    // I'm assuming that this is basically if something goes wrong do this
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }  


?>
