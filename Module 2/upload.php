<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("pdf");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a pdf file.";
      }
      
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp, $file_name);
         echo "Successfully uploaded";
      }else{
         print_r($errors);
      }
   }
?>
  <form action="index.php" method="POST">
         <input type="submit" value ="Back" />
      </form>
