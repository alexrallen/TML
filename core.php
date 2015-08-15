<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

echo "

<form action="test.php" method="post">
Name: <input type="text" name="name"><br>
EPS File: <input type="file" name="design"<br>
Item color: <input type="text" name="color">
<br>
<input type="submit">
</form>

";

?>
