<html>
  <body>
	
      <form action="register.php" method="post">
         <input type="submit" value = "Register">
      </form>

	<form action="login.php" method="post">
         <input type="submit" value = "Login">
      </form>
	</br></br></br>

	<h1>
	<?php
	if( isset($_POST['name']) )  // this is a redirection from the register page , create a file with the user data in it
	{
	// didnot handle user already existing 
		echo "Registered succefully " ;
		$filename = "./Users/".md5($_POST['email']) ; // file name is teh md5 of the email
		// echo $filename ;
		// delimeter is #
		$data = $_POST['name'] ."#". $_POST['email'] ."#". $_POST['password'] ."#". $_POST['phone'] ."#".$_POST['country'] ;
		// echo $data ;
		$file = fopen($filename, "w") or die("Cannot open the file") ;
		fwrite($file , $data) ;
		fclose($file) ;
	}	
	?>
	</h1>
      </body>
</html>
