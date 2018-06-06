<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style-sheet.css">
    <meta charset="UTF-8">
    <title>Masked Ball Web Organizer</title>
</head>
<body id="total_page">
<!-- codul pentru bara de navigare -->
<header id="header">
    <nav id="nav">
     <ul class="ul1">

        <?php 
            if(isset($_SESSION['user_mail'])){
                echo '<li><form action="script/logOut.php" method="POST">
                        <button type="submit" name="submit">Log out</button></form></li>
                        <li > <a href="manageEvents.php"> EventManager </a> </li>
                        <li > <a href="contact_us.php"> Contact</a>  </li>
                        <li > <a href="about.php"> About </a> </li>
                        <li > <a href="statistics.php">Statistics</a></li>
                        <li > <a href="index.php">Home</a></li>';
            }else{
                echo '<li > <a href="register.php"> Register </a> </li>
                    <li > <a href="login.php"> Login </a> </li>
                    <li > <a href="contact_us.php"> Contact</a>  </li>
                    <li > <a href="about.php"> About </a> </li>
                    <li > <a href="index.php">Home</a></li>';
            }
        ?>
        
        
        <h1 > <a href="index.php"> <img src="images/logo.png" alt=" "> </a></h1>
      </ul>
    </nav>

</header>