<?php
// this will take the quote submitted in quote_form.php and generate the current stock price.  These are some of my initial attempts
   // <?php echo $stock["symbol"] ; 
   //  <?php echo $stock ; 
   // so it's not working
   // how do I pass the variable $stock from quote.php to quote_output.php
   /*
    <?php if (isset($stock)): ?>
        <p>the stock is:  <?= htmlspecialchars($stock) ?> </p>
        <?php else: ?>
        <p>The stock variable didn't output correctly</p>
        <?php endif ?>
        
        */
   
      ?>

<!DOCTYPE html>

<html>

    <head>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>
        
        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    
    <body>

        <p>The stock symbol is:  <?php  
         echo($stock["symbol"]. '<br/> The stock price is:  ' . $stock["price"] . '<br/> The stock name is:  '. $stock["name"] );
         ?> </p>
        

    </body>


</html>

