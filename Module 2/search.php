 <html>
  <body>

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
$key = $_GET["key"] ; // search key 
// echo $key . "</br>" ;

// select query
$sql = "SELECT * from users where email = '" . $key . "'";

// echo $sql. "</br>" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "name : " . $row["name"]. "</br>email : " . $row["email"]. "</br>phone : " . $row["phone"] . "</br></br></br>";
    }
} else {
    echo "0 results";
}

//-------------------------------------------------------------------
mysqli_close($conn);

$conn->close();
setcookie("done" , "no") ;
setcookie("allSet" , "no") ;
?> 
</br>
</br>
<form action="index.php" method="post">
          <input type="submit" value  = "back">
</form
</body>
</html>
