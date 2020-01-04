
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

$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// select query
$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "name : " . $row["name"]. " email : " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

//-------------------------------------------------------------------
mysqli_close($conn);

$conn->close();
?>
