<?php
session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}
?>

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
    <<h1 class="page-title"> Sell a Product </h1>

    <form action="/hausmarket/product-service/create_product.php"
      method="POST"
      enctype="multipart/form-data">



        <input type="text" name="product_name" placeholder="Product Name" required>

        <textarea name="description" placeholder="Description"></textarea>

        <input type="number" step="0.01" name="price" placeholder="Price">

        <input type="text"
       name="image_url"
       placeholder="Or paste image URL">

<input type="file"
       name="product_image"
       accept="image/*">

        <button type="submit">Post Product</button>
    </form>
</div>

</body>
</html>