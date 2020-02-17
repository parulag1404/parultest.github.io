<?php
if(!empty($_POST["send"])) {
	$content = $_POST["content"];
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	
	

	$toEmail = "parulagrawal1998@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "index.php";
?>