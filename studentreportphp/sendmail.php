	<?php
session_start(); 
$username=$_SESSION['username'];
	if(isset($_POST['submit']))
	{
	 $name = $_POST['name'];
     $email=$_POST['email'];
	//get data from form
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"phplogin") or die(mysql_error());
	$result = mysqli_query($con,"SELECT name,id,mysql,html,php FROM users WHERE username='$username'");

    $rows = mysqli_num_rows($result);
    while($rows = mysqli_fetch_assoc($result)){
			
			$name=$rows['name'];
			$mysql=$rows['mysql'];
			$html=$rows['html'];
			$php=$rows['php'];
			$totalmarks=$mysql+$html+$php;
			$per=$totalmarks/300;

			
		
			
		}
		$message = "Your ward $name has secured $mysql marks in mysql, $html marks in html, $php marks in php, his overall perecntage is $per ";
		echo "$message <br> <a href='report.php'>GO back to report view</a><br> ";

	if($name && $message) // existence check
	{
		$namelen=20;
		$messagelen=300;
		if(strlen($name)<=$namelen && strlen($message)<=$messagelen) 
				{
			
			echo ini_get("SMTP");
			ini_set("SMTP","ssl://smtp.gmail.com");
            ini_set("smtp_port","465");
			
			
			//setup variables
			$to = $email;
			$subject = "Report card";
			$headers="From: pramodsbaviskar7.com";
			$body =$message;
			
			
			mail($to, $subject, $body, $headers);
			die();
			
			
		}
		else
		{
		    die("Max length for name is $namelen, and max length for message $messagelen");
		}
 	}
	else{
	die("You must enter a name <u>and</u> message");
	}
		
	}

	?> 


	<html>
	<style >
	.clickme {
    background-color: #EEEEEE;
    padding: 8px 20px;
    text-decoration:none;
    font-weight:bold;
    border-radius:5px;
    color: #10a2ff;
    cursor:pointer;
}
</style>

	<form action='sendmail.php' method='POST'>
	Name: <input type='text' name='name' maxlength='20'><br><br>
	Parent's Emailid:<input type='email' name='email'><br><br>
<br>
	<input class="clickme" type='submit' name='submit' value='Mail'>
	</form>
		<p>
			<br> <a class="clickme" href='report.php'>GO back to report view</a><br>

	</html>
