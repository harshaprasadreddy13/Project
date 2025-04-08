<?php
session_start();
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "prac"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['username'];
$pass = $_POST['password'];
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $_SESSION['username'] = $user; 
    header("Location: items.php");
    exit(); 
} else {
    header("Location: login.php?error=Incorrect username and password");
    exit();
}
$stmt->close();
$conn->close();
?>