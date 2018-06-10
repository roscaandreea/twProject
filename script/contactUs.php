<?php

session_start();

if(isset($_POST['submit'])){

    include_once 'dbHandler.php';


    $fname=mysqli_real_escape_string($conn, $_POST['fname']);
    $lname=mysqli_real_escape_string($conn, $_POST['lname']);
    $subject=mysqli_real_escape_string($conn, $_POST['subject']);
    $country=mysqli_real_escape_string($conn, $_POST['country']);

if(empty($fname) ||empty($lname) || empty($subject)){
        header("Location: ../contact_us.php?submitCheck=empty");
        exit();
    }
   else{
                    $sql="INSERT INTO contactus (firstName,lastName,country,message) VALUES (?,?,?,?);";
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        echo"SQL contact us statement failed";
                    }else{
                        mysqli_stmt_bind_param($stmt,"ssss", $fname,$lname,$country,$subject);
                        mysqli_stmt_execute($stmt);
        header("Location: ../contact_us.php?submitCheck=success") ;
        exit();
    }
}
}
?>
