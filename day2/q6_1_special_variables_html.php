<!DOCTYPE html>
<html>
<h1>enter three sides of triangle</h1>
<form action="post.php" method="GET">
	<input type="text" name="side1"><br>
	<input type="text" name="side2"><br>
	<input type="text" name="side3"><br><br>
	<input type="submit" value="click here">

</form>
</html>

<?php  

$side1 = $_GET['side1'];
$side2 = $_GET['side2'];
$side3 = $_GET['side3'];
if($side1||$side2||$side3){
if ($side1==$side2 && $side2==$side3)
{
	echo "it is an equilateral traingle";
}
else if ($side1==$side2 || $side1==$side3 || $side2==$side3){
	echo "isoceles triangle";
}
else{
	echo "scalen triangle";
}
}
?>