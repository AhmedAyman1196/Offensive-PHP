 <html>
  <body>
     <form action="login.php" method="get">
          Username: <input type="text" name="username"><br>
          Password : <input type="password" name="password"><br>
          <input type="submit" value = "login">
       </form>

	<?php
	if( isset($_GET['username']) )
	{
		$filename = "./Users/".$_GET['username'] ;
		// check if user exists (file exists)
		if(file_exists($filename)){ 
			$file = fopen($filename, "r") or die("Unable to open file!");
			$data = fgets($file) or die("Cannot read file");
			// echo $data ;
			$arr = explode("#" , $data);
			$pass = $arr[1] ;
			if($pass != $_GET['password'])
				echo " </br> </br> <h1> Wrong password :(( </h1> " ;
			else {
				setcookie("token", md5($_GET['password'])) ;
				echo($_GET['username'] . " " .$_GET['password'] );
				if($_GET['username'] == "admin" && $_GET['password'] == '123'){
					header("Location: admin.php");
				}
				else {
				header("Location: message.php");
				}
			}
			/*foreach ($arr as $i){ 
  				echo $i . "  " ;
			} 
			*/
			fclose($file);
		}else { echo " </br> </br> <h1> Wrong username :( </h1> " ;}
		
	}	
	?>
      </body>
</html>

