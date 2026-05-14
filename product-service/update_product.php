<?php
session_start();

include '../config/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: /hausmarket/frontend/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = intval($_POST['id']);
    $seller_email = $_SESSION['email'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = !empty($_POST['image_url'])
    ? $_POST['image_url']
    : $_POST['current_image'];

    if (!empty($_FILES['product_image']['name'])) {

        $upload_dir = "../frontend/uploads/";

        $image_name = time() . "_" . basename($_FILES['product_image']['name']);

        $target_file = $upload_dir . $image_name;

        $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed_types = ["jpg", "jpeg", "png", "gif", "webp"];

        if (in_array($image_type, $allowed_types)) {

            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {

                $image_url = "/hausmarket/frontend/uploads/" . $image_name;

            } else {

                die("Error uploading image.");
            }

        } else {

            die("Only JPG, JPEG, PNG, GIF, and WEBP files are allowed.");
        }
    }

    $sql = "UPDATE products
            SET product_name = ?,
                description = ?,
                price = ?,
                image_url = ?
            WHERE id = ?
            AND seller_email = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssdsis",
        $product_name,
        $description,
        $price,
        $image_url,
        $id,
        $seller_email
    );

    if ($stmt->execute()) {
        header("Location: /hausmarket/frontend/products.php");
        exit();
    } else {
        echo "Error updating product.";
    }
}
?>