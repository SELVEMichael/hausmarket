<?php
include '../config/db.php';

$sql = "SELECT * FROM products ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">

<h1>Marketplace</h1>

<?php while($row = $result->fetch_assoc()): ?>

<div class="card">

    <img src="<?php echo $row['image_url']; ?>" width="200">

    <h2><?php echo $row['product_name']; ?></h2>

    <p><?php echo $row['description']; ?></p>

    <h3>$<?php echo $row['price']; ?></h3>

    <p>Seller: <?php echo $row['seller_email']; ?></p>

</div>

<?php endwhile; ?>

</div>

</body>
</html>