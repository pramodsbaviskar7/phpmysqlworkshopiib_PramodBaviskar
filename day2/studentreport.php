<!DOCTYPE html>
<html>
<h1>ENTER YOUR DETAILS</h1><br>
<form action="studentreport.php" method="POST">
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
$name=$_POST['name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$totalsub=5;
$total=(float)(($sub1+$sub2+$sub5+$sub4+$sub3)/$totalsub);

if($sub1||$sub2||$sub3||$sub3||$sub4||$sub5||$name){
echo "Your Name ".$name. "<br>";
echo "Subject 1 marks: ".$sub1. "<br>";
echo "Subject 2 marks: ".$sub2. "<br>";
echo "Subject 3 marks: ".$sub3. "<br>";
echo "Subject 4 marks: ".$sub4. "<br>";
echo "Subject 5 marks: ".$sub5. "<br>";
echo "total marks: ".($sub1+$sub2+$sub5+$sub4+$sub3)."<br>";

echo "Percentage: ",$total."%";
}

?>


