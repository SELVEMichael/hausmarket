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