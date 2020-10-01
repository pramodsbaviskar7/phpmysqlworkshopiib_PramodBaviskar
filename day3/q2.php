<?php  
require("connection.php");
$rec = "SELECT * FROM class1 WHERE name='Rohan'";
$res = $con->query($rec);

if ($res->num_rows > 0) {
  
  while($row = $res->fetch_assoc()) {
    $marks = $row['total_obtained'];
    $olds5 = $row['sub5'];
    $s5 = 99;
    $per = $row['percent'];

    $marks = $marks- $olds5 + $s5;
    $per = (float)(($marks/500)*100);

    $update = "UPDATE class1 SET sub5=$s5, total_obtained=$marks, percent='$per' WHERE name='Rohan'";
    if ($con->query($update) === TRUE) {
            echo "Rohan's record updated <br><br>";
    } else {
            echo "Error updating record: " . $con->error;
    }
    
    echo "Updated marks of Rohan in Subject 5: $s5<br>Total Marks Obtained:$marks<br>Percentage: $per % <br>";
  }
} else {
  echo "0 results";
}

?>