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



}