<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Sign In</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/style.css">

</head>
<body class="login-page">

<?php include 'navbar.php'; ?>

<div class="login-wrapper">

    <div class="login-card">

        <div class="login-icon">
            🔒
        </div>

        <h1 class="login-title">
            Sign In
        </h1>

        <p class="login-subtitle">
            Welcome back! Please sign in to continue.
        </p>

        <form action="/hausmarket/user-service/login_user.php"
              method="POST">

            <label>Email</label>

            <input type="email"
                   name="email"
                   placeholder="Enter your email"
                   required>

            <label>Password</label>

            <input type="password"
                   name="password"
                   placeholder="Enter your password"
                   required>

            <button type="submit"
                    class="login-btn">

                Sign In →

            </button>

        </form>

        <div class="login-divider">
            OR
        </div>

        <p class="register-text">

            Don't have an account?

            <a href="register.php">
                Register
            </a>

        </p>

    </div>

</div>

</body>
</html>