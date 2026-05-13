<?php
session_start();
?>

<?php
include '../config/db.php';

if (!isset($_GET['username'])) {
    die("Username missing.");
}

$username = $_GET['username'];

$sql = "SELECT * FROM users WHERE username = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if (!$user) {
    die("Seller not found.");
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Seller Profile</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/style.css">

</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <div class="product-card">

        <img src="<?php echo $user['profile_image']; ?>">

        <div class="product-info">

            <h1>
                <?php echo $user['fullname']; ?>
            </h1>

            <p>
                @<?php echo $user['username']; ?>
            </p>

            <p>
                <?php echo $user['bio']; ?>
            </p>

        </div>

    </div>

</div>

</body>
</html>