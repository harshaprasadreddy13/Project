<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "prac"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname']; 
    $contact = $_POST['contact']; 
    $items = [];
    $totalPrice = 0; 

if(isset($_POST['pizza1']) && $_POST['quantity1'] > 0) {
    $pizza1_quantity = (int)$_POST['quantity1'];
    $pizza1_price = 150 * $pizza1_quantity;
    $items[] = "Fried Momos x $pizza1_quantity";
    $totalPrice += $pizza1_price;
}
if (isset($_POST['pizza2']) && $_POST['quantity2'] > 0) {
    $pizza2_quantity = (int)$_POST['quantity2'];
    $pizza2_price = 100 * $pizza2_quantity;
    $items[] = "Steamed Momos x $pizza2_quantity";
    $totalPrice += $pizza2_price;
}
$address = $_POST['address'];
$items_ordered = implode(', ', $items);
$sql = "INSERT INTO order1 (fullname, contact, items, address, total) VALUES ('$fullname', '$contact', '$items_ordered', '$address', '$totalPrice')";
if ($conn->query($sql) === TRUE) {
header("Location: final1.php");
exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
