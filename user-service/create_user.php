<?php 
session_start();

include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $bio = $_POST['bio'];
    $profile_image = $_POST['profile_image'];

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

$_SESSION['user_id'] = $conn->insert_id;
$_SESSION['fullname'] = $fullname;
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['profile_image'] = $profile_image;

        if (isset($_SESSION['redirect_after_login'])) {

    $redirect = $_SESSION['redirect_after_login'];

    unset($_SESSION['redirect_after_login']);

    header("Location: " . $redirect);

} else {

    header("Location: /hausmarket/frontend/index.php");
}

    } else {

        echo "Error: " . $stmt->error;

    }
}
?>