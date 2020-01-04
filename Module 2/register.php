<html>
  <body>

      <form action="register.php" method="post">
          Name: <input type="text" name="name"><br>
          E-mail: <input type="text" name="email"><br>
          Phone: <input type="text" name="phone"><br>
          <input type="submit" >
        </form
<?php
	$servername = "localhost";
	$username = "user";
	$password = "password";
	$dbname = "site";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
	}
// ---------------------------------------------------------

// insert query
if(isset($_POST['name'])){
	$name = $_POST['name'] ;
	$email = $_POST['email'] ;
	$sql = "INSERT INTO users (name,email , phone)
	VALUES ('". $_POST['name'] ."' , '". $_POST['email'] .  "','" . 		$_POST['phone'] . "')";

	if (mysqli_query($conn, $sql)) {
  	  echo "New record created successfully";
	} else {
 	   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

	$conn->close();

	setcookie("done" , "yes") ;
	header("Location: index.php"); 
}
?> 

	</body>
</html>
