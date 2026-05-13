<?php
session_start();

include '../config/db.php';

if (!isset($_SESSION['user_id'])) {

    header("Location: /hausmarket/frontend/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $seller_email = $_SESSION['email'];

    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    $sql = "INSERT INTO products
    (seller_email, product_name, description, price, image_url)
    VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "sssds",
        $seller_email,
        $product_name,
        $description,
        $price,
        $image_url
    );

    if ($stmt->execute()) {
        header("Location: ../frontend/products.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>