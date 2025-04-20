<?php


echo "hello User!!<br>";
$servername = "db:3306";
$username = "root";
$password = "root";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "You are Connected to mydatabase<br>";

?>
