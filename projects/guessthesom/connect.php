<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>