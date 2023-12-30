<?php
$host = 'localhost';
$dbName = 'car';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $dbName);

if ($conn->connect_error) {
    die("Fatal Error: Connection Error! " . $conn->connect_error);
}
?>
