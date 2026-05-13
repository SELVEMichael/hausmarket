<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>HausMarket</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="hero">

    <div class="hero-content">

        <h1>Buy & Sell Anything</h1>

        <p>
            The modern online marketplace for everyone.
        </p>

        <a href="products.php" class="hero-btn">
            Explore Products
        </a>

    </div>

</section>

<div class="footer">
    <p>© 2025 HausMarket</p>
</div>

<?php if(isset($_SESSION['user_id'])): ?>

    <h2>
        Welcome back,
        <?php echo $_SESSION['username']; ?>!
    </h2>

<?php endif; ?>

</body>
</html>