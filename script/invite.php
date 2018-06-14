<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])) {
	$subject =mysqli_real_escape_string($conn, $_POST['subject']);
	$message = mysqli_real_escape_string($conn,$_POST['message']);
	$mailTo = mysqli_real_escape_string($conn,$_POST['mail']);
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	
	$txt = "You have been invited to a party by ".$name.".\n\n".$message;
	
	

//Load Composer's autoloader
require 'C:\xampp\htdocs\twProject\vendor\autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'proiectul29@gmail.com';                 // SMTP username
    $mail->Password = 'PrOjEcT29';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('proiectul29@gmail.com', 'Mailer');
    $mail->addAddress($mailTo);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = '<body>'.$message.'</body>';
    $mail->AltBody = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

header("Location: ../invitation.php?invitation=success");
	
} 
