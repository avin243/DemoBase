<?php
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=? OR email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
        echo "<script>alert('Login successful!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Incorrect password!'); window.location.href='signup.html';</script>";
    }
} else {
    echo "<script>alert('User not found!'); window.location.href='signup.html';</script>";
}
?>