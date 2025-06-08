<?php
$servername = "localhost";
$username = "root"; // default XAMPP user
$password = "avinash";
$database = "demobase";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>