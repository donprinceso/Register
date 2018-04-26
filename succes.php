<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login View</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet/mystyle.css"/>
    </head>
    <body>
        <div class="success-msg">
            <div class="container">
                 <?php if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                     echo $_SESSION['message'];    
                 else:
                     header( "location: index.php" );
                 endif;?>
                 <h3><a href="Logout.php">Login?</a></h3>
             </div>
        </div>
    </body>
</html>
