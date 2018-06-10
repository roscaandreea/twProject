<?php require ("/opt/lampp/htdocs/twProject/vendor/autoload.php");

//Step 1: Enter you google account credentials
$g_client = new Google_Client();
$g_client->setClientId("456610734150-uda6gu8nkhlb0ilq242n2hflo1l0rmm3.apps.googleusercontent.com");
$g_client->setClientSecret("BuKLQq-UnSS0oE9x9W39xMd-");
$g_client->setRedirectUri("http://localhost/twProject/login.php");
$g_client->setScopes("email");
//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
echo "<a href='$auth_url'>Login Through Google </a>";
//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;
//Step 4: Get access token
if(isset($code)) {
    try {
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
    }catch (Exception $e){
        echo $e->getMessage();
    }
    try {
        $pay_load = $g_client->verifyIdToken();
    }catch (Exception $e) {
        echo $e->getMessage();
    }
} else{
    $pay_load = null;
}

if(isset($pay_load)){
    include_once 'dbHandler.php';

    $nameFull=$pay_load['email'] ;
    $email=$pay_load['email'];
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

