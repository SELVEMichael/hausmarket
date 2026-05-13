<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h2>Create Account</h2>

    <form action="../user-service/create_user.php" method="POST">

        <input type="text" name="fullname" placeholder="Full Name" required>

        <input type="text" name="username" placeholder="Username" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <textarea name="bio" placeholder="Short Bio"></textarea>
        <input type="text" name="profile_image" placeholder="Profile Image URL">

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>