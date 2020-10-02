<!DOCTYPE html>
<html>
<h1>ENTER YOUR DETAILS</h1><br>
<form action="mysql.php" method="POST">
	Name:<input type="text" name="name" placeholder="enter your name"><br><br>
	Sub1:<input type="number" name="sub1" placeholder="subject 1"><br><br>
	Sub2:<input type="number" name="sub2" placeholder="subject 2"><br><br>
	Sub3:<input type="number" name="sub3" placeholder="subject 3"><br><br>
	Sub4:<input type="number" name="sub4" placeholder="subject 4"><br><br>
	Sub5:<input type="number" name="sub5" placeholder="subject 5"><br><br>

	<input type="submit" value="Submit your marks"><br><br>

</form>
</html>

<?php 
$name1=$_POST['name'];
$sub11 = $_POST['sub1'];
$sub21 = $_POST['sub2'];
$sub31 = $_POST['sub3'];
$sub41 = $_POST['sub4'];
$sub51 = $_POST['sub5'];
$totalsub1=5;
$totalmarks1=($sub11+$sub21+$sub51+$sub41+$sub31);
$total1=(float)(($sub11+$sub21+$sub51+$sub41+$sub31)/$totalsub1);
$file=file_get_contents("count.txt");
$visitors=$file;
echo "your site has $visitors visitors";
$visitornew=$visitors+1;
$filenew=fopen("count.txt","w");
fwrite($filenew,$visitornew);

require("connection.php");



$write = mysqli_query($con,"INSERT INTO class1 VALUES('','$name1','$sub11','$sub21','$sub31','$sub41','$sub51','$totalmarks1','500','$total1')");

$extract = mysqli_query($con,"SELECT *FROM class1 ORDER BY id asc");
$rows = mysqli_num_rows($extract);
echo $rows."<br>";
while($rows = mysqli_fetch_assoc($extract)){
$id=$rows['id'];
$name=$rows['name'];
$sub1=$rows['sub1'];
$sub2=$rows['sub2'];
$sub3=$rows['sub3'];
$sub4=$rows['sub4'];
$sub5=$rows['sub5'];
$totalmarks=$rows['total_marks'];
$total=$rows['total_obtained'];
$perc=$rows['percent'];

echo "$name, Marks are $sub1, $sub2,$sub3,$sub4,$sub5, Total makrs are $totalmarks , You obtained $total and Your percentage is $perc <br>";
}

 ?>
