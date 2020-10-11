<?php  
session_start(); 
$username=$_SESSION['username'];
$submit=$_POST['submit'];
$marksphp=$_POST['marksphp'];
$marksmysql=$_POST['marksmysql'];
$markshtml=$_POST['markshtml'];
if(isset($_POST['submit'])){
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"phplogin") or die(mysql_error());
	$result = mysqli_query($con,"SELECT name,id,mysql,html,php FROM users WHERE username='$username'");

    $rows = mysqli_num_rows($result);
    while($rows = mysqli_fetch_assoc($result)){
			
			
			$mysql=$rows['mysql'];
			$html=$rows['html'];
			$php=$rows['php'];
			$totalmarks=$mysql+$html+$php;
			$per=$totalmarks/300;

			
		
			
		}

	if($marksmysql>100||$marksphp>100||$markshtml>100){
			echo "marks are out of 100, please enter valid marks";
		}else
{
		 $update = "UPDATE users SET php='$marksphp', mysql='$marksmysql',html='$markshtml'  WHERE username='$username'";
		 
		 echo "RECORDS UPDATED";
        if ($con->query($update) === TRUE) {
            
        }
         else 
        {
            echo "Error updating record: " . $con->error;
        }
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
<body>
	<form action="changemarks.php" method="POST">
		<table>
			<tr>
				<td>Marks in php:</td>
				<td>
					<input type="number" name="marksphp" placeholder="<?php echo $php ?>">
				</td>
			</tr>
			<tr>
				<td>Marks in mysql:</td>
				<td>
					<input type="number" name="marksmysql" placeholder="<?php echo $mysql ?>">
				</td>
			</tr>
			<tr>
				<td>Marks in html:</td>
				<td>
					<input type="number" name="markshtml" placeholder="<?php echo $html ?>">
				</td>
			</tr>
			
		</table>
		<input class="clickme" type="submit" name="submit" value="Update marks">
		</form>
		<p>
			<br> <a class="clickme" href='report.php'>GO back to report view</a><br>
</body>
</html>
