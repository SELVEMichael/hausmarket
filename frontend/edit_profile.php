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
<body class="login-page">

<?php include 'navbar.php'; ?>

<div class="login-wrapper">

    <div class="profile-card">

        <div class="login-icon">
            👤
        </div>

        <h1 class="profile-title">
            Edit Profile
        </h1>

        <p class="profile-subtitle">
            Update your information and manage your profile.
        </p>

        <form action="/hausmarket/user-service/update_profile.php"
              method="POST"
              enctype="multipart/form-data">

            <label>Full Name</label>

            <input type="text"
                   name="fullname"
                   value="<?php echo htmlspecialchars($user['fullname']); ?>"
                   required>

            <label>Username</label>

            <input type="text"
                   name="username"
                   value="<?php echo htmlspecialchars($user['username']); ?>"
                   required>

            <label>Bio</label>

            <textarea name="bio"><?php echo htmlspecialchars($user['bio']); ?></textarea>

            <label>Profile Picture URL</label>

            <input type="text"
                   name="profile_image"
                   value="<?php echo htmlspecialchars($user['profile_image']); ?>">

            <input type="hidden"
                   name="current_profile_image"
                   value="<?php echo htmlspecialchars($user['profile_image']); ?>">

            <label>Upload New Profile Image</label>

            <input type="file"
                   name="uploaded_profile_image"
                   accept="image/*">

            <p class="upload-note">
                Leave empty if you don't want to change your profile picture.
            </p>

            <button type="submit"
                    class="login-btn">

                💾 Update Profile

            </button>

        </form>

    </div>

</div>

</body>
</html>