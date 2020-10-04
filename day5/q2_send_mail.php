	<?php

	//'Send me an email' script

	if(isset($_POST['submit']))
	{
	//get data from form
	$name = $_POST['name'];
	$message = $_POST['message'];
	$email=$_POST['email'];

	if($name && $message) // existence check
	{
		$namelen=20;
		$messagelen=300;
		if(strlen($name)<=$namelen && strlen($message)<=$messagelen) //length  check
		{
			//everything is ok
			
			//set SMTP php.ini
			//ini_set("SMTP", "smtp.gmail.com");
			//ini_set("smtp_port","587");
			echo ini_get("SMTP");
			ini_set("SMTP","ssl://smtp.gmail.com");
            ini_set("smtp_port","465");
			
			
			//setup variables
			$to = "pramodsbaviskar7@gmail.com";
			$subject = "Feedback details";
			$subject1="thankyou for your feedback";
			$headers="From: pramodsbaviskar7.com";
			$body =$message;
			$body1="Your feedback is valuable for us";
			
			mail($to, $subject, $body, $headers);
			die();
			mail($email,$subject1,$body1,$headers);
			
		}
		else
		    die("Max length for name is $namelen, and max length for message $messagelen");
 	}
	else
	die("You must enter a name <u>and</u> message");
		
	}
	?> 

	<html>

	<form action='q2_send_mail.php' method='POST'>
	Name: <input type='text' name='name' maxlength='20'><br><br>
	Emailid:<input type='email' name='email'><br><br>
	Message:<br /><textarea name='message'> </textarea><p><br>
	<input type='submit' name='submit' value='Send the Feedback'>
	</form>

	</html>