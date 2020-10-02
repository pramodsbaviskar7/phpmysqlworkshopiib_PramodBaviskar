<!DOCTYPE html>
<html>
<body>
<form action="q2_String_functions.php" method="POST">
	<input type="text" name="string">
<input type="submit" value="CLICK HERE TO APPLY STRING FUNCTIONS">
</form>



</body>
</html>


<?php  
$String =$_POST['string'];
$stringlen=strlen($String);
$strtoarray =  explode(" ",$String);

$stringrev = strrev($String);
$stringlower = strtolower($String);
$stringupper = strtoupper($String);
$replace = str_replace($String, "Billy", $String);
if($String)
{
echo "Number of characters in the string: $stringlen <br>" ;
echo "string to array: ";
foreach($strtoarray as $character) {
 echo "$character <br>" ;
};
echo "Reverse: $stringrev <br>";
echo "lowercase: $stringlower <br> ";
echo "uppercase: $stringupper <br> ";
echo "$replace <br>";
}
?>