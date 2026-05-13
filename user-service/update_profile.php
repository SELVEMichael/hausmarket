<?php
session_start();

include '../config/db.php';

if (!isset($_SESSION['user_id'])) {

    header("Location: /hausmarket/frontend/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_SESSION['user_id'];

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $bio = $_POST['bio'];
    $profile_image = $_POST['profile_image'];

    $sql = "UPDATE users
            SET fullname = ?,
                username = ?,
                bio = ?,
                profile_image = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssi",
        $fullname,
        $username,
        $bio,
        $profile_image,
        $user_id
    );

    if ($stmt->execute()) {

        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['profile_image'] = $profile_image;

        header("Location: /hausmarket/frontend/profile.php");
        exit();

    } else {

        echo "Error updating profile.";

    }
}
?>