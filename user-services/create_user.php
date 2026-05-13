<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(fullname, email, password)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullname, $email, $password);

    if ($stmt->execute()) {
        header("Location: ../frontend/index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>