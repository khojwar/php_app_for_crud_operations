<!-- connection to the database -->
<?php
$servername = "localhost";
$username = "tika";
$password = "123456";
$dbname = "crud_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>