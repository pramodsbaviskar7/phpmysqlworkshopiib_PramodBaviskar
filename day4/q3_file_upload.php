<html>
   <body>
      
      <form action = "q3_file_upload.php" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "myfile" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['myfile']['name'];  ?>
            <li>File size: <?php echo $_FILES['myfile']['size'];  ?>
            <li>File type: <?php echo $_FILES['myfile']['type'] ?>
         </ul>
			
      </form>
      
   </body>
</html>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['myfile']['name'];
      $file_size = $_FILES['myfile']['size'];
      $file_tmp = $_FILES['myfile']['tmp_name'];
      $file_type = $_FILES['myfile']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['myfile']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploaded/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>