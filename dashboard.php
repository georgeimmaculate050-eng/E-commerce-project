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
</head>
<body>

    <h1>Welcome <?php echo $_SESSION['user']; ?></h1>

    <hr>

    <h2>Customer Management</h2>

    <a href="register.php">
        <button>Add Customer</button>
    </a>

    <br><br>

    <a href="view_customers.php">
        <button>View Customers</button>
    </a>

    <hr>

    <h2>Product Management</h2>

    <a href="add_product.php">
        <button>Add Product</button>
    </a>

    <br><br>

    <a href="view_products.php">
        <button>View Products</button>
    </a>

    <hr>

    <h2>Shopping Cart</h2>

    <a href="cart.php">
        <button>View Cart</button>
    </a>

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