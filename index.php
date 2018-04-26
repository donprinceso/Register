<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="windows-1252">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Login View</title>
       <link rel="stylesheet" href="css/bootstrap.css"/>
       <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
       <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet/mystyle.css"/>
    </head>
    <body>
        <?php require'register_process.php';?>
        <div class="container">
            <div class="reg-form">
                <form  role="form" action="index.php" method="post" class="form-horizontal ">
                    <h2 class="form-signin-heading">Register An Account</h2>
            <br/>
            <?php include 'Error.php';?>
            <br/>
                <div class="row">
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <div class="form-group-lg">
                            <input name="surname" placeholder="Surname" class="form-control" type="text" autofocus required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <div class="form-group-lg">
                            <input name="lastname" placeholder="Lastname" class="form-control" type="text" required/>
                        </div>
                    </div>
                </div> 
                <br/>
                
                    <div class="form-group-lg">
                        <input name="email" placeholder="Email Address" class="form-control" type="email" autocomplete required/>
                    </div>
               
                <br/>
                <div class="row">
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <div class="form-group-lg">
                            <input name="password_1" placeholder="Password" class="form-control" type="password" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <div class="form-group-lg">
                            <input name="password_2" placeholder="Confirm Password" class="form-control input-group-sm" type="password" required/>
                        </div>
                    </div>
                </div>
                <br/>
                
                    <div class="form-group-lg">
                        <button type="submit" class="btn btn-lg btn-block btn-primary" name="Register">Submit</button>
                    </div>
                
                <br/>
                <p>Already Have An Account 
                    <a class="btn btn-default">Login</a>
                </p>    
            </form>
            </div>
        </div>
    </body>
</html>
