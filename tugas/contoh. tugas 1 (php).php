<?php
include('php/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Online Shop</h1>
    </header>

    <div class="products">
        <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="product">
                <img src="images/'.$row['image'].'" alt="Product">
                <h2>'.$row['name'].'</h2>
                <p>Price: $'.$row['price'].'</p>
                <button onclick="addToCart('.$row['id'].')">Add to Cart</button>
            </div>';
        }
        ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
