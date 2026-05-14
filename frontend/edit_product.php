<?php
session_start();
?>

<?php
include '../config/db.php';

if (!isset($_GET['id'])) {
    die("Product ID is required.");
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$product = $result->fetch_assoc();

$stmt->close();

if (!$product) {
    die("Product not found.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h1>Edit Product</h1>

    <div class="card">

        <form action="/hausmarket/product-service/update_product.php"
      method="POST"
      enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

            <input type="email"
                   name="seller_email"
                   value="<?php echo htmlspecialchars($product['seller_email']); ?>"
                   required>

            <input type="text"
                   name="product_name"
                   value="<?php echo htmlspecialchars($product['product_name']); ?>"
                   required>

            <textarea name="description"><?php echo htmlspecialchars($product['description']); ?></textarea>

            <input type="number"
                   step="0.01"
                   name="price"
                   value="<?php echo htmlspecialchars($product['price']); ?>">
            
            <input type="hidden"
       name="current_image"
       value="<?php echo htmlspecialchars($product['image_url']); ?>">       

            <input type="file"
       name="product_image"
       accept="image/*">


            <button type="submit">Update Product</button>

        </form>

    </div>

</div>

</body>
</html>