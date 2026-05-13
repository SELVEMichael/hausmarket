<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Create Account</h2>

    <form action="../user-service/create_user.php" method="POST">

        <input type="text" name="fullname" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>