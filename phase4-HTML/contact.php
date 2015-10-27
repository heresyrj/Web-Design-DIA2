<?php

	$params = json_decode($HTTP_RAW_POST_DATA);

	$name = $params->{"name"};
  $content = $params->{"message"};
  $email = $params->{"email"};
	  
	// email
  $email = "dia2feedback@gmail.com";
	//$email = "cgaeta@purdue.edu";
  $host = $_SERVER["HTTP_HOST"];
  $from = "DIA2 <$email>";
  $subject = "User feedback - $name";
  //$to = "ci4ene.ikneer@gmail.com";
  $headers = "From: ".$from."\r\n";
  $headers .= "Reply-To: ".$from."\r\n";
  $headers .= "Return-Path: ".$from."\r\n";
  $headers .= "Content-type: text/html\r\n";
  //$partialPwd = substr($password, 0, 3);
  //$leftLength = strlen($password) - strlen($partialPwd);
  //$maskedPwd = $partialPwd;
  //for($i = 0; $i < $leftLength; $i++)
  //$maskedPwd .= "*";
  $msgBody = "Author: $name <br> Comment: $content";
  
	if(mail($email, $subject, $msgBody, $headers))
		echo "message sent";
	else
		echo "message failed";

?>