<?php
    include_once 'Header.php';
?>
        
        <form action="script/signUp.php" class="form-register" method="POST" >

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" value="name">
                        </label>
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
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="submit">Sign Up</button>
                    </div>

                </div>

                <a href="login.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <?php include_once 'script/googleLogIn.php' ?>
                <?php include_once 'script/facebookLogIn.php' ?>
                <a href="#" class="form-twitter-button">Twitter</a>
            
            
            <?php

            if(!isset($_GET['signUp'])){
                exit();
            }else{
                $singUpCheck=$_GET['signUp'];

                if($singUpCheck == "empty"){
                    echo "You did not fill all the fields!";
                }else if($singUpCheck=="errorInvalidChar"){
                    echo "You have used invalid characters!";
                    exit();
                }else if($singUpCheck=="invalidEmail"){
                    echo "You used an invalid e-mail!";
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
