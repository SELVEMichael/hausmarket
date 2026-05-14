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

    $profile_image = !empty($_POST['profile_image'])
        ? $_POST['profile_image']
        : $_POST['current_profile_image'];

    if (!empty($_FILES['uploaded_profile_image']['name'])) {

        $upload_dir = "../frontend/uploads/";

        $image_name = time() . "_" . basename($_FILES['uploaded_profile_image']['name']);
        $target_file = $upload_dir . $image_name;
        $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed_types = ["jpg", "jpeg", "png", "gif", "webp"];

        if (in_array($image_type, $allowed_types)) {

            if (move_uploaded_file($_FILES['uploaded_profile_image']['tmp_name'], $target_file)) {
                $profile_image = "/hausmarket/frontend/uploads/" . $image_name;
            } else {
                die("Error uploading profile image.");
            }

        } else {
            die("Only JPG, JPEG, PNG, GIF, and WEBP files are allowed.");
        }
    }

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