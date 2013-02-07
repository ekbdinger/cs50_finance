<?php

    // configuration
    require("../includes/config.php");
    
  
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        
        // verify that something is entered in all of the fields
        if ( empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["confirmation"]) )
        {
            apologize("please fill out all of the fields");
        }
        
        // verify that password == confirmation
        if ( $_POST["password"] != $_POST["confirmation"] )
        {
            apologize("Your password and password confirmation do not match");
        }
        
        // inserts a user into the database
        $query = query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
        
        // indicate if the query fails, duplicate username for example
        if ( $query === false)
        {
            apologize("username already exists");
        }
        
    // going to try removing this to see if th works
// will want to indicate that they successfully registered, redirect to index.php
        
        // find out what id the last user who registered is
        $rows = query("SELECT LAST_INSERT_ID() AS id"); 
        $id = $rows[0]["id"];
        
        // remember the session id during redirection
        $fred = session_id();

        if ( session_id() == $fred )
        {
             $_SESSION["id"] = $fred;
             redirect("index.php" );   
        }
  
        // error checking
        echo "session id";
        $foo = session_id();
        echo $foo;
        echo " <br/>";  
        echo $id;
        
    }
    
   
   
    // I'm assuming that this is basically if something goes wrong do this
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }  


?>
