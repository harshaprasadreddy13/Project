<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password is empty
$dbname = "prac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

// SQL query to insert user data
 $sql = "INSERT INTO users (fullname, username, password, contact, email) 
 VALUES ('$fullname', '$username', '$password', '$contact', '$email')";
if ($conn->query($sql) === TRUE) {
    header("Location:Login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>