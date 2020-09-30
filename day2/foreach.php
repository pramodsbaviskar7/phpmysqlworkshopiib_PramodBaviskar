<?php  
$numbers=array("one","two","three");
$variable=array(0=>"one",1=>"two",2=>"three");
foreach ($numbers as $value) {
	echo $value."<br>";
}
foreach ($variable as $key => $value) {
	echo "$key"." $value"."<br>";
}

?>