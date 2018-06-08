<?php

session_start();

if(isset($_POST['submit'])){

    include_once 'script/dbHandler.php';


    $fname=mysqli_real_escape_string($conn, $_POST['fname']);
    $lname=mysqli_real_escape_string($conn, $_POST['lname']);
    $subject=mysqli_real_escape_string($conn, $_POST['subject']);

if(empty($fname) ||empty($lname) || empty($subject)){
        header("Location: ../contact_us.php?submitCheck=empty");
        exit();
    }else{
         
            if((!preg_match("/^[a-zA-Z\s]*$/",$fname) || (!preg_match("/^[a-zA-Z\s]*$/",$lname) || (!preg_match("/^[a-zA-Z\s]*$/",$subject))
            {
                header("Location: ../contact_us.php?submitCheck=errorInvalidChar");
                exit();
            }            
          }
}   else{
        header("Location: ../register.php?submitCheck=success") ;
        exit();
    }
?>
