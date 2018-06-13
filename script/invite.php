<?php

if (isset($_POST['submit'])) {
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$mailTo = $_POST['mail'];
	$mailFrom = "marin.mihai1997@yahoo.com";
	$name = $_POST['name'];
	$headers = "From: ".$mailFrom;
	$txt = "You have been invited to a party by ".$name.".\n\n".$message;
	
	mail($mailTo,$subject,$txt,$headers);
	header("Location: ../invitation.php?invitation=success");
	
}

