<?php
session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}

include '../config/db.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $user_id);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Profile</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/style.css">

</head>
<body>

<?php include 'navbar.php'; ?>

<div class="form-container">

    <h1>Edit Profile</h1>

    <form action="/hausmarket/user-service/update_profile.php"
          method="POST">

        <input type="text"
               name="fullname"
               value="<?php echo $user['fullname']; ?>"
               required>

        <input type="text"
               name="username"
               value="<?php echo $user['username']; ?>"
               required>

        <textarea name="bio"><?php echo $user['bio']; ?></textarea>

        <input type="text"
               name="profile_image"
               value="<?php echo $user['profile_image']; ?>">

        <button type="submit">
            Update Profile
        </button>

    </form>

</div>

</body>
</html>