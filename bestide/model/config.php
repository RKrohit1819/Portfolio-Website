<?php 
$server = 'localhost';
$username = 'root';
$passowrd = 'mysql';
$db_name = 'ide_user';
$conn = new mysqli($server, $username, $passowrd, $db_name);
if ($conn->connect_error) {
    die('Error connecting to server: ' . $conn->connect_error);
}
?>
