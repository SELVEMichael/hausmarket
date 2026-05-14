<?php
session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>My Profile</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/style.css">

</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <div class="product-card">

        <img src="<?php echo $_SESSION['profile_image']; ?>">

        <div class="product-info">

            <h1>
                <?php echo $_SESSION['fullname']; ?>
            </h1>

            <p>
                @<?php echo $_SESSION['username']; ?>
            </p>

            <p>
                <?php echo $_SESSION['email']; ?>
            </p>

            <a class="edit-btn"
               href="edit_profile.php">
               Edit Profile
            </a>

        </div>

    </div>

</div>

</body>
</html>