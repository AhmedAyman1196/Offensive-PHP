<html>
  <body>
	<h1> Send the admin a message</h1>
      <form action="message.php" method="post">
         Title : <input type="text" name = "title"></br>
         Message : <input type="text" name = "message">
	 <input type="submit" value = "Send">
      </form>
	
     <form action="logout.php" method="post">
	 <input type="submit" value = "Logout">
      </form>
  <?php
	if(isset($_POST['title'])){
		echo "Your message have been sent" ;
	
	$filename = "messages.txt" ;	
	$data = "$" .$_POST['title'] ."#". $_POST['message'];
	$file = fopen($filename, "a+") or die("Cannot open the file") ;
	fwrite($file , $data) ;
	fclose($file) ;
	}
  ?>
  </body>
</html>
