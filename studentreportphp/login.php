<?php 
session_start();
$username=$_POST['username'];
$password = $_POST['password'];
$servername = "localhost";
$user = "root";
$pass = "";

if($username&&$password){
$con=mysqli_connect($servername,$user,$pass) or die("could'nt connect");
if($con) {
 
    
  $db=mysqli_select_db($con,"phplogin") or die(mysql_error());;
  
$query = mysqli_query($con,"SELECT *FROM users ORDER BY id asc");
$rows = mysqli_num_rows($query);
if($rows>0){
	while ($rows = mysqli_fetch_assoc($query)) {
		$dbusername=$rows['username'];
		$dbpassword=$rows['password'];

	}
	if($dbusername&&$dbpassword){
	if($username==$dbusername&&$password==$dbpassword){

		echo "You logged in successfully<br>you are in! <a href='report.php'>click</a> here to view your report card";
		$_SESSION['username']=$dbusername;

	}
	else{
		echo "wrong credentials <br> <br><a href='index.php'>go back to login again</a>";
	}
}else{
	echo "please <a href='registration.php'>register</a> yourself before logging in <br>";
}


}

}
else {
  echo '<h1>MySQL Server is not connected</h1>';
}
}
else{
	die("please enter your username and password <br><a href='index.php'>return</a>");
}

?>