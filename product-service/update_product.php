<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = intval($_POST['id']);
    $seller_email = $_POST['seller_email'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    $sql = "UPDATE products
            SET seller_email = ?,
                product_name = ?,
                description = ?,
                price = ?,
                image_url = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "sssdsi",
        $seller_email,
        $product_name,
        $description,
        $price,
        $image_url,
        $id
    );

    if ($stmt->execute()) {
        header("Location: /hausmarket/frontend/products.php");
        exit();
    } else {
        echo "Error updating product: " . $stmt->error;
    }
}
?>