<?php
session_start();

/* CHECK LOGIN */

if (!isset($_SESSION['user_id'])) {

    /* SAVE REDIRECT */

    $_SESSION['redirect_after_login'] =
        "/hausmarket/frontend/cart.php?id=" . $_GET['id'];

    header("Location: /hausmarket/frontend/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Shopping Cart</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/style.css">

</head>
<body class="marketplace-page">

<?php include 'navbar.php'; ?>

<div class="login-wrapper">

    <div class="profile-card">

        <div class="login-icon">
            🛒
        </div>

        <h1 class="profile-title">
            Shopping Cart
        </h1>

        <p class="profile-subtitle">
            Your cart system is coming soon.
        </p>

    </div>

</div>

</body>
</html>