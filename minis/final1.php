<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prac";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fullname, contact, items, address, total FROM order1 ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
    $contact = $row['contact'];
    $items = $row['items'];
    $address = $row['address'];
    $total = $row['total'];
} 
else {
    $fullname = "No orders yet";
    $contact = "-";
    $items = "-";
    $address = "-";
    $total = 0;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="final.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        SNACK
        <div class="nav">
            <i class="fa-solid fa-house"></i>
            <a href="Restaurant.html" style="text-decoration:none;color:white;color:white">Home</a>
            <a href="items.php"  style="text-decoration:none;color:white;color:white;font-size:32px"><i class="fa-solid fa-burger"></i>Items</a>
            <a href="logout.php"  style="text-decoration:none;color:white;color:white;font-size:27px"><i class="fa-solid fa-user"></i> Log out</a>
        </div>
    </div>
    <div class="name">
        <h1 style="text-align:center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Thanks for your order</h1>
    </div>
    <div class="container">
        <h2>Name: <?php echo $fullname; ?></h2>
        <h2>Contact: <?php echo $contact; ?></h2>
        <h2>Items: <?php echo $items; ?></h2>
        <h2>Address: <?php echo $address; ?></h2>
        <h2>Total: <?php echo $total; ?></h2>
        <div class="payment-methods">
        <img src="googlepay.avif" height="50px" width="80px" alt="PhonePe" style="margin-left: 40px"/>
    <img src="phonepes.webp" height="30px" width="30px" alt="PhonePe" style="margin-bottom: 10px;margin-left: 50px"/>
    <img src="image.png" height="50px" width="70px" alt="PhonePe" style="margin-left: 70px"/>
</div>
        <center><img src="phon1.jpg" height="130px" width="170px"/></center>
    </div>
</body>
</html>