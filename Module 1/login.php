 <html>
  <body>
     <form action="login.php" method="get">
          E-mail: <input type="text" name="email"><br>
          Password : <input type="password" name="password"><br>
          <input type="submit">
       </form>

	<?php
	if( isset($_GET['email']) )
	{
		$filename = "./Users/".md5($_GET['email']) ;
		// check if user exists then (file exists)
		if(file_exists($filename)){

			$file = fopen($filename, "r") or die("Unable to open file!");
			$data = fgets($file) or die("Cannot read file");
			// echo $data ;
			$arr = explode("#" , $data);
			$pass = $arr[2] ;
			if($pass != $_GET['password'])
				echo " </br> </br> <h1> Wrong password :(( </h1> " ;
			else {
				setcookie("token", md5($_GET['email'])) ;
				header("Location: profile.php");
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
