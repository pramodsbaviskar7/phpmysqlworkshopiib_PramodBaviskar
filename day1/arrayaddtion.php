<?php 
$pos=3;
$array1=array(array(1,2),array(3,4));
$array2=array(array(5,6),array(7,8));
echo "matrix 1 is <br>".$array1[0][0]." ". $array1[0][1]."<br>";
echo $array1[1][0]." ". $array1[1][1]."<br>";

echo "matrix 2 is <br>".$array2[0][0]." ". $array2[0][1]."<br>";
echo $array2[1][0]." ". $array2[1][1]."<br>";
echo "matrix addition is <br> ";

echo $array1[0][0]+$array2[0][0]." ";
echo $array1[0][1]+$array2[0][1]." <br>";
echo $array1[1][0]+$array2[1][0]." ";
echo $array1[1][1]+$array2[1][1]." ";
?>