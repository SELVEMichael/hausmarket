<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h2>Sell a Product</h2>

    <form action="../product-service/create_product.php" method="POST">

        <input type="email" name="seller_email" placeholder="Seller Email" required>

        <input type="text" name="product_name" placeholder="Product Name" required>

        <textarea name="description" placeholder="Description"></textarea>

        <input type="number" step="0.01" name="price" placeholder="Price">

        <input type="text" name="image_url" placeholder="Image URL">

        <button type="submit">Post Product</button>
    </form>
</div>

</body>
</html>