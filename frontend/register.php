<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Create Account</title>

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
            ✨
        </div>

        <h1 class="profile-title">
            Create Account
        </h1>

        <p class="profile-subtitle">
            Join HausMarket and start buying or selling today.
        </p>

        <form action="/hausmarket/user-service/create_user.php"
              method="POST"
              enctype="multipart/form-data">

            <label>Full Name</label>

            <input type="text"
                   name="fullname"
                   placeholder="Enter your full name"
                   required>

            <label>Username</label>

            <input type="text"
                   name="username"
                   placeholder="Choose a username"
                   required>

            <label>Email</label>

            <input type="email"
                   name="email"
                   placeholder="Enter your email"
                   required>

            <label>Password</label>

            <input type="password"
                   name="password"
                   placeholder="Create a password"
                   required>

            <label>Short Bio</label>

            <textarea name="bio"
                      placeholder="Tell people a little about yourself"></textarea>

            <label>Profile Picture URL</label>

            <input type="text"
                   name="profile_image"
                   placeholder="Paste profile image URL">

            <label>Upload Profile Picture</label>

            <input type="file"
                   name="uploaded_profile_image"
                   accept="image/*">

            <button type="submit"
                    class="login-btn">

                🚀 Create Account

            </button>

        </form>

        <div class="login-divider">
            OR
        </div>

        <p class="register-text">

            Already have an account?

            <a href="login.php">
                Sign In
            </a>

        </p>

    </div>

</div>

</body>
</html>