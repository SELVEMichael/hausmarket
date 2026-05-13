<?php
session_start();
?>

<?php
include '../config/db.php';

$sql = "
SELECT products.*, users.username, users.profile_image
FROM products
JOIN users
ON products.seller_email = users.email
ORDER BY products.id DESC
";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

<h1>Marketplace</h1>

<?php while($row = $result->fetch_assoc()): ?>

<div class="card">

    <img src="<?php echo $row['image_url']; ?>" width="200">

    <h2><?php echo $row['product_name']; ?></h2>

    <p><?php echo $row['description']; ?></p>

    <h3>$<?php echo $row['price']; ?></h3>

    <p>
    Seller: @<?php echo $row['username']; ?>
</p>

<a class="edit-btn"
   href="/hausmarket/frontend/seller_profile.php?username=<?php echo $row['username']; ?>">
   View Seller
</a>

    <a href="/hausmarket/frontend/edit_product.php?id=<?php echo $row['id']; ?>">Edit</a>
    <a href="/hausmarket/product-service/delete_product.php?id=<?php echo $row['id']; ?>">Delete</a>
    
</div>

<?php endwhile; ?>

</div>

</body>
</html>