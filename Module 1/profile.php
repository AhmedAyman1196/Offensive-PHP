
 <html>
  <body>
   	<?php
	if($_COOKIE['token'] == 'null'){ // no cookies
		header("Location: index.php");
		exit ;
	}

	$token =  $_COOKIE['token'] ;
	$filename = "./Users/".$token;
	$file = fopen($filename, "r") or die("Unable to open file!");
	$data = fgets($file) or die("Cannot read file");
	$arr = explode("#" , $data);
	foreach ($arr as $i){ 
  		echo $i . "</br> " ;
	} 
	fclose("file");
	?>
	 <form action="logout.php">
         <input type="submit" value = "Logout">
      </form>
  </body>
</html>

