<?php
session_start();
if(session_destroy()){
    header("location:../Login/index.php");
}
 else {
    session_unset();
}