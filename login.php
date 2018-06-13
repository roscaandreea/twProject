<?php
    include_once 'Header.php';
?>

    
        <form class="form-login" method="POST" action="script/logIn.php">

            <input type="text" name="text" value="Please enter the verification code below"/>
            <img src="captcha.php" alt=""/><br/>
            <input type="text" name="check" required/>
            <input type="submit" name="submit" value="Check"/>

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <div class="form-row">
                       <button type="submit" name="submit"> Log in</a></button>
                    </div>

                </div>

                <a href="register.php" class="form-create-an-account">Create an account </a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <?php include_once 'script/googleLogIn.php' ?>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>

                <?php

                if(!isset($_GET['login'])){
                    exit();
                }else{
                    $singUpCheck=$_GET['login'];

                    if($singUpCheck == "empty"){
                            echo "You did not fill all the fields!";
                        }else if($singUpCheck=="error"){
                            echo "Something went wrong!Please try again.";
                            exit();
                        }else if($singUpCheck=="succes"){
                            echo "You have been singed un!";
                        }
                }

                ?>

            </div>

        </form>

    

<?php
    include_once 'Footer.php';
?>
