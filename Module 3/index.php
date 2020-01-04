<html>
  <body>
	<!-- edit message.txt to remove the xss payload -->
      <form action="register.php" method="post">
         <input type="submit" value = "Register">
      </form>

	<form action="login.php" method="post">
         <input type="submit" value = "Login">
      </form>
	</br></br></br>

	<h1>
	<?php
	if( isset($_POST['username']) )  // this is a redirection from the register page , create a file with the user data in it
	{
	// didnot handle user already existing
		echo "Registered succefully " ;
		$filename = "./Users/".$_POST['username'] ;
		// delimeter is #
		$data = $_POST['username'] ."#". $_POST['password'] ;
		// echo $data ;
		$file = fopen($filename, "w") or die("Cannot open the file") ;
		fwrite($file , $data) ;
		fclose($file) ;
	}
	?>
	</h1>
      </body>
</html>
