<?php

    if(isset($_POST['submit'])){
        
        include_once 'dbHandler.php';

        $nameFull=mysqli_real_escape_string($conn,$_POST['name']) ;
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $passwd=mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($nameFull) || empty($email) ||empty($passwd)){
            header("Location: ../register.php?signUp=empty");
            exit();
        }else{
            if(!preg_match("/^[a-zA-Z\s]*$/",$nameFull)){
                header("Location: ../register.php?signUp=errorInvalidChar");
                exit();
            }else{

                $sql="SELECT * FROM user_accounts WHERE e_mail='$email'";
                $result=mysqli_query($conn,$sql);
                $resCheck=mysqli_num_rows($result);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $resCheck>0){
                    header("Location: ../register.php?signUp=invalidEmail");
                    exit();
                }else{
                    $sql="INSERT INTO user_accounts (first_last_name,e_mail,acc_password) VALUES (?,?,?);";
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        echo"SQL signUp statement failed";
                    }else{
                        $hashedPasswdInDb=password_hash($passwd,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"sss", $nameFull,$email,$hashedPasswdInDb);
                        mysqli_stmt_execute($stmt);
                    }
                header("Location: ../index.php?signUp=success") ;
                }
            }
        }
        
    }else{
        header("Location: ../register.php?signUp=error");
        exit();
    }

    

?>