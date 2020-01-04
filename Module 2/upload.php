<?php
   if(isset($_FILES['cv'])){
      $errors= array();
      $file_name = $_FILES['cv']['name'];
      $file_size =$_FILES['cv']['size'];
      $file_tmp =$_FILES['cv']['tmp_name'];
      $file_type=$_FILES['cv']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['cv']['name'])));
      $extensions= array("pdf");
      
	// Couldnot figure out how to bypass this
	// so the extenstion check is now in frontend (html)

      // if(in_array($file_ext,$extensions)=== false){
      //   $errors[]="extension not allowed, please choose a pdf file.";
      //}
      
      
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
