<?php


if (isset($_POST['send'])) {
	$to =$_POST['to'];//"jocelmandap@gmail.com";
	$subject =$_POST['subject'];//"Jocel Mandap";
	$msg = $_POST['msg'];//"Using my own code for sending this mail.";
	$header =$_POST['from'];//"From : jocelmandap@gmail.com";



	$retval =mail($to,$subject,$msg,$header);
	ini_set( 'SMTP', 'smtp.gmail.com' ); // must be set to your own local ISP
	ini_set( 'smtp_port', '587' ); // assumes no authentication (passwords) required 
	ini_set( 'sendmail_from', 'jocelmandap@gmail.com' ); // can be any e-mail address, but must be set

	if($retval === true){
		echo "Message sent successfully";
	}else{
		echo "Message Failed to sent";
	}
}


 ?>

 <html>
 <head>
 	<title>Email</title>
 </head>
 <body>
 	<h1>Jmail.com</h1>
 	<form action = "<?= $_SERVER['PHP_SELF']?>" method = "POST">
 		<input type = "text" name = "to"><br>
 		<input type = "text" name = "subject"><br>
 		<textarea name = "msg"></textarea><br>
 		<input type = "text" name = "from"><br>
 		<input type = "submit" name = "send" value = "SEND"> 
 	</form>
 
 </body>
 </html>