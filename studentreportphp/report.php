<?php 
session_start(); 
$username=$_SESSION['username'];

if($_SESSION['username']){


$con=mysqli_connect("localhost","root","");

}
else{
	die("you must be logged in! <a href='index.php'>click</a> here to login again<br>");
}
?>
<!DOCTYPE html>
<html>
<style>
	table th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

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
<body>
	<div class="header">
  <a href="#default" class="logo">Hello <?php echo "$username";?></a>

  </div>
</div>
	
		<?php
		$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"phplogin") or die(mysql_error());
		
		
		$result = mysqli_query($con,"SELECT name,id,mysql,html,php FROM users WHERE username='$username'");
		
		$rows = mysqli_num_rows($result);
		
		while($rows = mysqli_fetch_assoc($result)){
			$id=$rows['id'];
			$name=$rows['name'];
			$mysql=$rows['mysql'];
			$html=$rows['html'];
			$php=$rows['php'];
			$totalmarks=$mysql+$html+$php;
			$per=$totalmarks/300;
			
		#	$totalmarks=$rows['total_marks'];
		#	$total=$rows['total_obtained'];
		#	$perc=$rows['percent'];
			
		}
			

		?>
		<p>YOUR REPORT CARD :</p>
		<table style="border: 10px">
						
				<tr>
					<th>PHP</th>
					<th>MySql</th>
					<th>Html</th>
					<th>Total</th>
					<th>Your score</th>
					<th>Percentage</th>
				</tr><br>
				<tr>
					<td style="height:50px;width:100px;text-align:center;" ><?php echo $php; ?></td>
					<td style="height:50px;width:100px;text-align:center;"><?php echo $mysql; ?></td>
					<td style="height:50px;width:100px;text-align:center;"><?php echo $html; ?></td>
					<td style="height:50px;width:100px;text-align:center;"><?php echo 300; ?></td>
					<td style="height:50px;width:100px;text-align:center;"><?php echo $totalmarks; ?></td>
					<td style="height:50px;width:100px;text-align:center;"><?php echo $per*100; ?></td>
				</tr>
			</table>
			<p>

			<input class="clickme" type="button" onclick="window.location.href='changemarks.php';" value="Update Marks" />
			<input class="clickme" type="button" onclick="window.location.href='sendmail.php';" value="Click Here to Mail Your Report Card" />
    </form>
			<?php

			if($totalmarks<120){
			echo '<script>alert("you scored less than 60%, you need to improve")</script>';	
			}
			else if($totalmarks>250){
				echo '<script>alert("excellent, you passed with High Distinction")</script>';
			}
			
			?>
			<p>
			<br> <a class="clickme" href='changepassword.php'>Change Password</a><p><br><a class="clickme" href='logout.php'>logout</a>

</body>
</html>