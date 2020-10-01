
	<?php

$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password);
if($con) {
  echo '<h1>Connected to MySQL</h1>';
  echo '<h1>All the data getting updated will be displaed here</h1>';
  //if connected then Select Database.
  $db=mysqli_select_db($con,"result") or die(mysql_error());;
  echo "connected";
}
else {
  echo '<h1>MySQL Server is not connected</h1>';
}
	?>

	