

<?php  

$submit=$_POST['submit'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password = $_POST['password'];

$repeatpassword = $_POST['repeatpassword'];
$marksphp=$_POST['marksphp'];
$marksmysql=$_POST['marksmysql'];
$markshtml=$_POST['markshtml'];
if(isset($_POST['submit'])){
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"phplogin") or die(mysql_error());$namecheck=mysqli_query($con,"SELECT username FROM users WHERE username='$username'");
	$count= mysqli_num_rows($namecheck);
	if($fullname&&$username&&$password&&$repeatpassword&&$markshtml&&$marksmysql&&$marksphp){
		if($password==$repeatpassword){
			if(strlen($username)>25||strlen($fullname)>25){
	echo "Max limit for username/fullname is 25 characters";
	}
	else{
		if($count!=0){
		echo "username already taken<br>";
	}
	else{
		if($marksmysql>100||$marksphp>100||$markshtml>100){
			echo "marks are out of 100, please enter valid marks";
		}else{

			$query = mysqli_query($con,"INSERT into users VALUES('','
		$fullname','$username','$password','$marksphp','$marksmysql','$markshtml')");
	die("you have been registered successfully!<br> Return to <a href='index.php'>login</a> page");
	}
	}

	}

		}
		else{
			echo "<br>password and repeatpassword doens't match";
		}

	}
	else{
		echo "<br>please enter all required details";

	}





}

?>

<html>
<style >

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.clickme {
    background-color: #EEEEEE;
    padding: 8px 20px;
    text-decoration:none;
    font-weight:bold;
    border-radius:5px;
    color: #10a2ff;
    cursor:pointer;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
<div class="header">
  <a href="#default" class="logo">Pramod Baviskar</a>
  <div class="header-right">
    <a class="active" href="index.php">Login</a>
    <a href="registration.php">register here</a>
    <a href="#about">About</a>
  </div>
</div>

<div style="padding-left:20px">

	<form method="POST" action="registration.php">
		
		<table>
			<tr>
				<td>your full name:</td>
				<td>
					<input type="text" name="fullname" value="<?php echo $fullname ?>">
				</td>
			</tr>
			<tr>
				<td>Username:</td>
				<td>
					<input type="text" name="username" value="<?php echo $username ?>">
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
					<input type="password" name="password" >
				</td>
			</tr>
			<tr>
				<td>Repeat password:</td>
				<td>
					<input type="password" name="repeatpassword">
				</td>
			</tr>
			<tr>
				<td>Marks in php:</td>
				<td>
					<input type="number" name="marksphp" >
				</td>
			</tr>
			<tr>
				<td>Marks in mysql:</td>
				<td>
					<input type="number" name="marksmysql" >
				</td>
			</tr>
			
			<tr>
				<td>Marks in HTML:</td>
				<td>
					<input  type="number" name="markshtml" >
				</td>
			</tr>
		</table>
		<p>
			<input class="clickme" type="submit" name="submit" value="register">
			  <input class="clickme" type="button" onclick="window.location.href='index.php';" value="Login here" />
    </form>
	</form>


</html>
