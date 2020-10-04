<!DOCTYPE html>
<html>
<body>
<form action="q1_md5.php" method="POST">
	<input type="text" name="username" placeholder="USERNAME"><br>
	<input type="password" name="password" placeholder="PASSWORD"><br>
	<input type="submit"  name="submit" value="save details">

</form>
</body>
</html>
<?php  
$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password);
if($con) {
  echo '<h1>Connected to MySQL</h1>';
  $db=mysqli_select_db($con,"data1") or die(mysql_error());;
  echo "connected successfully";
}
else {
  echo '<h1>MySQL Server is not connected</h1>';
}

$username=$_POST['username'];
$userpassword=$_POST['password'];
$userpasswordenc=md5($userpassword);

if (isset($_POST['submit'])) {
$write = mysqli_query($con,"INSERT INTO userdetails VALUES('$username','$userpasswordenc')");

$extract = mysqli_query($con,"SELECT *FROM userdetails ");
$rows = mysqli_num_rows($extract);
while($rows = mysqli_fetch_assoc($extract)){
$user=$rows['username'];
$encpass=$rows['password'];
echo "$user and $encpass <br>";

}
}
$con->close();
?>