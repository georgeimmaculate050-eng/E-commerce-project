<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="view_products.php">Products</a>
    <a href="cart.php">Cart</a>
    <a href="login.php">Login</a>
</nav>

<div class="hero">
    <h1>Welcome to Imma Electronics Store</h1>

    <p>
        Latest Laptops, Smartphones and Accessories at Affordable Prices
    </p>

    <a href="view_products.php">
        <button>Shop Now</button>
    </a>
</div>



    <hr>

<h2>Featured Products</h2>

<div class="product-grid">

<?php

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<div class="product-card">

    <img src="images/<?php echo $row['image']; ?>" alt="Product Image">

    <h3><?php echo $row['product_name']; ?></h3>

    <p><?php echo $row['description']; ?></p>

    <p><strong>Ksh <?php echo $row['price']; ?></strong></p>

</div>

<?php
}
?>

</div>

<hr>


    <div class="dashboard-container">

    <div>
        <h2>Customer Registration</h2>

        <a href="register.php">
            <button>Register Customer</button>
        </a>
    </div>

    <div>
        <h2>Browse Products</h2>

        <a href="view_products.php">
            <button>View Products</button>
        </a>
    </div>

    <div>
        <h2>Shopping Cart</h2>

        <a href="cart.php">
            <button>View Cart</button>
        </a>
    </div>

    <div>
        <h2>Dashboard</h2>

        <a href="dashboard.php">
            <button>Admin Dashboard</button>
        </a>
    </div>

</div>  
            <h2>Dashboard</h2>

            <a href="dashboard.php">
                <button>Admin Dashboard</button>
            </a>
        </div>

    </div>
    <footer>
    <p>&copy; 2026 Imma Electronics Store. All Rights Reserved.</p>
</footer>

</body>
</html>

