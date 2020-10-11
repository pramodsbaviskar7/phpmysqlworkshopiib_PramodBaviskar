<?php  

session_start();
$username=$_SESSION['username'];
if($username){
	if(isset($_POST['submit'])){
		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['newpassword'];
		$repeatnewpassword=$_POST['repeatnewpassword'];
		
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"phplogin") or die(mysql_error());;
$result = mysqli_query($con,"SELECT name,id,mysql,html,php,password FROM users WHERE username='$username'");

	

  $rows = mysqli_num_rows($result);
 while($rows = mysqli_fetch_assoc($result)){
			
			$dbpassword=$rows['password'];
			$mysql=$rows['mysql'];
			$html=$rows['html'];
			$php=$rows['php'];
			$totalmarks=$mysql+$html+$php;
			$per=$totalmarks/300;

			
		
			
		}

	if($oldpassword==$dbpassword){

		if($newpassword==$repeatnewpassword){
			
			
			echo "$username";

			 $update = "UPDATE users SET password='$newpassword'  WHERE username='$username'";
		 
			 echo "$update";

		}
		else{
			die("both didnt match <a class='clickme' href='report.php'>go back to report</a> ") ;
		}
	}
	else{
		die("both didnt match <a class='clickme' href='report.php'>go back to report</a> ") ;
	}

	}
	else{

	}
echo "
<form action= 'changepassword.php'  method='POST'>
	Old Password:<input type='text' name='oldpassword' placeholder='old password'><p>
	New Password:<input type='password' name='newpassword' placeholder='new password'><br>
	Repeat New Password:<input type='password' name='repeatnewpassword' placeholder='Repeat new password'><br>
	<input type='submit' name='submit'><br>
	<br><a class='clickme' href='index.php'>click</a> here to login again<br>
	
	


</form>
";

}
else{

	die("you must login to ");
}
?>