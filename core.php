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
Item color: <input type="text" name="color"><br>
Enabled? (not recomended): <input type="text" name="enabled"><br>
Distance from top: <input type="text" name="location"><br>
Size of eps: <input type="text" name="size"><br>
<input type="submit">
</form>

";

?>
