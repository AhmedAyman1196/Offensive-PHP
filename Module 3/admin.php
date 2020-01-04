<html>
  <body>

<?php

// if someone other than the admin logs in , return them to the login page
if($_COOKIE['token'] != '202cb962ac59075b964b07152d234b70'){
	setcookie("token", "null") ;
	header("Location: message.php");
}else {
	$data = file_get_contents("messages.txt") or die("Cannot read file");
	$arr = explode("$" , $data);
	foreach ($arr as $arri){
  		$message = explode("#", $arri);
		if(count($message)==2){
			echo "Title : " . $message[0] ."</br>";
			echo "message : " . $message[1] ."</br>" ."</br>"."</br>";
		}
	}	
}	
	
?>
  </body>
</html>

