<?php

session_start();

if(isset($_POST['submit'])){

    include_once 'dbHandler.php';

    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $passwd=mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($email) ||empty($passwd)){
        header("Location: ../login.php?login=empty");
        exit();
    }else{

        $sql= "SELECT * FROM user_accounts WHERE e_mail='$email'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);

        if($resultCheck<1){
            header("Location: ../login.php?login=error");
            exit();
        }else{
            if($row=mysqli_fetch_assoc($result)){
                //dehash
                $hashedPwdCheck= password_verify($passwd,$row['acc_password']);
                if($hashedPwdCheck==false){
                    header("Location: ../login.php?login=error");
                    exit(); 
                }else if($hashedPwdCheck==true){
                    //Logg
                    $_SESSION['user_mail']=$row['e_mail'];
                    $_SESSION['user_passwd']=$row['acc_password'];
                    $_SESSION['user_identity']=$row['user_id'];

                    header("Location: ../index.php?logIn=succes");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: ../login.php?login=error");
    exit();
}
