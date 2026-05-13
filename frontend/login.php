<?php
session_start();
?>

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
<body>

<?php include 'navbar.php'; ?>

<div class="form-container">

    <h1>Sign In</h1>

    <form action="/hausmarket/user-service/login_user.php"
          method="POST">

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit">
            Sign In
        </button>

    </form>

    <p style="margin-top:20px; text-align:center;">

        Don't have an account?

        <a href="register.php">
            Register
        </a>

    </p>

</div>

</body>
</html>