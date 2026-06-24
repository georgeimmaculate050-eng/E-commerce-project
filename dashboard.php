<<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="style.css">

</head>
<body>

    <h1>Welcome <?php echo $_SESSION['user']; ?></h1>

    <hr>

    <div class="dashboard-container">

    <div>
        <h2>Customer Management</h2>

        <a href="register.php">
            <button>Add Customer</button>
        </a>

        <br><br>

        <a href="view_customers.php">
            <button>View Customers</button>
        </a>
    </div>

    <div>
        <h2>Product Management</h2>

        <a href="add_product.php">
            <button>Add Product</button>
        </a>

        <br><br>

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
    <h2>Orders</h2>

    <a href="view_orders.php">
        <button>View Orders</button>
    </a>
</div>

</div>

<hr>

<a href="index.php">
    <button>Back to Home</button>
</a>

    <br><br>

    <a href="logout.php">
        <button>Logout</button>
    </a>

</body>
</html>