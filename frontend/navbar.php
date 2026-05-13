<nav class="navbar">

    <div class="logo">
        HausMarket
    </div>

    <div class="nav-links">

        <a href="/hausmarket/frontend/index.php">
            Home
        </a>

        <a href="/hausmarket/frontend/products.php">
            Products
        </a>

        <?php if(isset($_SESSION['user_id'])): ?>

            <a href="/hausmarket/frontend/add_product.php">
                Sell Product
            </a>

            <a href="/hausmarket/frontend/profile.php">
                Profile
            </a>

            <a href="/hausmarket/user-service/logout.php">
                Logout
            </a>

        <?php else: ?>

            <a href="/hausmarket/frontend/login.php">
                Sign In
            </a>

            <a href="/hausmarket/frontend/register.php">
                Register
            </a>

        <?php endif; ?>

    </div>

</nav>