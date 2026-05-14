<?php
session_start();



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

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/style.css">

</head>
<body class="marketplace-page">

<?php include 'navbar.php'; ?>

<div class="container">

    <h1 class="products-title">
        Listings
    </h1>

    <div class="products-grid">

        <?php while($row = $result->fetch_assoc()): ?>

            <div class="product-card">

                <img src="<?php echo $row['image_url']; ?>">

                <div class="product-info">

                    <h2>
                        <?php echo $row['product_name']; ?>
                    </h2>

                    <p>
                        <?php echo $row['description']; ?>
                    </p>

                    <div class="price">
                        K<?php echo number_format($row['price'], 2); ?>
                    </div>

                    <p>
                        Seller:
                        @<?php echo $row['username']; ?>
                    </p>

                    <div class="card-buttons">

<?php if(isset($_SESSION['user_id']) &&
          $_SESSION['email'] == $row['seller_email']): ?>

    <!-- OWNER BUTTONS -->

    <a class="edit-btn"
       href="/hausmarket/frontend/edit_product.php?id=<?php echo $row['id']; ?>">

        ✏ Edit

    </a>

    <a class="delete-btn"
       href="/hausmarket/product-service/delete_product.php?id=<?php echo $row['id']; ?>"
       onclick="return confirm('Delete this product?');">

        🗑 Delete

    </a>

<?php else: ?>

    <!-- BUYER BUTTONS -->

    <a class="cart-btn"
       href="/hausmarket/frontend/cart.php?id=<?php echo $row['id']; ?>">

        🛒 Add to Cart

    </a>

    <a class="seller-btn"
       href="/hausmarket/frontend/seller_profile.php?username=<?php echo $row['username']; ?>">

        👤 View Seller

    </a>

<?php endif; ?>

</div>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

</div>

<div class="footer">
    <p>© 2025 HausMarket</p>
</div>

</body>
</html>