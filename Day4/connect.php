<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

echo "Connecting to db...<br>";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully<br>";
}

?>