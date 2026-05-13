<?php
include '../config/db.php';

if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    $sql = "DELETE FROM products WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        header("Location: /hausmarket/frontend/products.php");
        exit();

    } else {

        echo "Error deleting product: " . $stmt->error;

    }

} else {

    echo "Product ID missing.";

}
?>