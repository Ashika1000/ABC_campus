<?php
$servername = 'localhost';
$username = 'root';
$password = ''; // Adjust based on your setup
$database = 'abc_campus';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

