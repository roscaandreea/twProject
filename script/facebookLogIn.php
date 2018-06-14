<?php require_once 'C:\\xampp\\htdocs\\twProject\\vendor\\autoload.php';

/*Step 1: Enter Credentials*/

$fb = new \Facebook\Facebook([
    'app_id' => '651653171846093',
    'app_secret' => '49fb4546ba30e20267e43854db87ae65',
    'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
]);

/*Step 2 Create the url*/

if(empty($access_token)) {

    echo "<a href='{$fb->getRedirectLoginHelper()->getLoginUrl("http://localhost/twProject/login.php")}'>Login with Facebook </a>";

}

/*Step 3 : Get Access Token*/

$access_token = $fb->getRedirectLoginHelper()->getAccessToken();

/*Step 4: Get the graph user*/

if(isset($access_token)) {

    try {

        $response = $fb->get('/me',$access_token);
        $fb_user = $response->getGraphUser();
        echo  $fb_user->getName();
        //  var_dump($fb_user);

    } catch (\Facebook\Exceptions\FacebookResponseException $e) {

        echo  'Graph returned an error: ' . $e->getMessage();

    } catch (\Facebook\Exceptions\FacebookSDKException $e) {

        // When validation fails or other local issues

        echo 'Facebook SDK returned an error: ' . $e->getMessage();

    }

	include_once 'dbHandler.php';

    $nameFull=$fb_user->getName() ;
    $email=$fb_user->getName();
    $passwd= str_shuffle("1234567890abcdefgijhklmnopqrstuvwxyz()/$");

    $sql="SELECT * FROM user_accounts WHERE e_mail='$email'";
    $result=mysqli_query($conn,$sql);
    $resCheck=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

    if($resCheck>0){
            $_SESSION['user_mail']=$row['e_mail'];
            $_SESSION['user_passwd']=$row['acc_password'];
            $_SESSION['user_identity']=$row['user_id'];

            header("Location: http://localhost/twProject/index.php");
                    
    }else{

        $sql="INSERT INTO user_accounts (first_last_name,e_mail,acc_password) VALUES (?,?,?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo"SQL signUp statement failed";
        }else{
            $hashedPasswdInDb=password_hash($passwd,PASSWORD_DEFAULT);
            
            mysqli_stmt_bind_param($stmt,"sss", $nameFull,$email,$hashedPasswdInDb);
            mysqli_stmt_execute($stmt);
            
            $_SESSION['user_mail']=$nameFull;
            $_SESSION['user_passwd']=$email;
            $_SESSION['user_identity']=$hashedPasswdInDb;
            
            header("Location: http://localhost/twProject/index.php");
        }

    }

}