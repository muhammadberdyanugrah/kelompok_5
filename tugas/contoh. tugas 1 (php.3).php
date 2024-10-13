<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Proses data checkout
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Insert ke database
    $query = "INSERT INTO orders (name, address) VALUES ('$name', '$address')";
    if (mysqli_query($conn, $query)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h2>Checkout</h2>
    <form action="checkout.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="address">Address:</label>
        <textarea name="address" required></textarea><br>
        <button type="submit">Place Order</button>
    </form>
</body>
</html>
