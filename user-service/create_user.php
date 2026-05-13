<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $bio = $_POST['bio'];
    $profile_image = $_POST['profile_image'];

    $sql = "INSERT INTO users
            (fullname, username, email, password, bio, profile_image)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssss",
        $fullname,
        $username,
        $email,
        $password,
        $bio,
        $profile_image
    );

    if ($stmt->execute()) {

        header("Location: /hausmarket/frontend/index.php");
        exit();

    } else {

        echo "Error: " . $stmt->error;

    }
}
?>