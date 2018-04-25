<?php
session_start();
require_once 'Database.php';

$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

$errors=array();

if(isset($_POST['Register'])){
    
    $surname= mysqli_real_escape_string($con,$_POST['surname']);
    $lastname= mysqli_real_escape_string($con,$_POST['lastname']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password_1= mysqli_real_escape_string($con,$_POST['password_1']);
    $password_2= mysqli_real_escape_string($con,$_POST['password_2']);
    
   
    if(strlen($password_1)<6){
        array_push($errors,"Password should not be less than 6 characters");
    }
    
    if ($password_1 !== $password_2){
        array_push($errors,"Your passwords do not match !");
    }
    
    $mail_query="select * from user where email='$email'";
    $res= mysqli_query($con, $mail_query);
    if(mysqli_num_rows($res)>0){
        array_push($errors,"Email address already exists !");
    }
    
    if(count($errors==0)){
       $password_1= md5($password_1);
        $sql="iNSERT INTO user (surname,lastname,email,password_1)VALUES('$surname','$lastname','$email','$password_1')";
        $result= mysqli_query($con, $sql);
        if ($result){
            $_SESSION['message']="Hey.'$surname'.'$lastname' "
                    . "a Confirmation have been send to .'$email' click on the button to "
                    . "confirm your account";
            header("Location:succes.php");
            
            
            $to="$email";
            $headers="MIME-VERSION:1.0" . "\r\n";
            $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .="From: $email";
            $headers .="Cc: donprince4life44@gmail.com";
            $subject="Account Verification";
            $message_body='Hello '.$surname.''.$lastname.',

                    Thank you for signing up!

                    Please click this link to activate your account:

                    http://../verify.php?email='.$email.'';  

            $mail = mail($to,$subject,$message_body,$headers);
            
        }
    }
    else 
        {
             array_push($errors,"Registation Fail!!!");
        }
}


