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

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
phone VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//-------------------------------------------------------------------
mysqli_close($conn);

$conn->close();

setcookie("allSet" , "yes") ;
header("Location: index.php"); 
?> 

