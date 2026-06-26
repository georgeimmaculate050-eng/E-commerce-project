<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
include 'db_connect.php';
$payment_count = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM payments")
);

$product_count = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM products")
);

$customer_count = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM customers")
);

$order_count = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM orders")
);
$sales_total = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT SUM(total_amount) AS total_sales FROM orders")
);
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
    <p style="text-align:center; color:#1f4e79;">
    Administrator Dashboard - Imma Electronics Store
</p>
    <p style="text-align:center;">
    <?php echo date("l, d F Y"); ?>
</p>

<div class="dashboard-container">
    <div>
    <h2>Total Payments</h2>
    <h1><?php echo $payment_count['total']; ?></h1>
</div>

    <div>
        <h2>Total Products</h2>
        <h1><?php echo $product_count['total']; ?></h1>
    </div>

    <div>
        <h2>Total Customers</h2>
        <h1><?php echo $customer_count['total']; ?></h1>
    </div>

    <div>
        <h2>Total Orders</h2>
        <h1><?php echo $order_count['total']; ?></h1>
    </div>

    <div>
        <h2>Total Sales</h2>
        <h1>Ksh <?php echo $sales_total['total_sales']; ?></h1>
    </div>

</div>

<hr>

<h2>Management Panel</h2>

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
<h2 style="text-align:center;">Quick Reports</h2>

<div class="dashboard-container">

    <div>
        <a href="view_customers.php">
            <button>Customer Report</button>
        </a>
    </div>

    <div>
        <a href="view_products.php">
            <button>Product Report</button>
        </a>
    </div>

    <div>
        <a href="view_orders.php">
            <button>Sales Report</button>
        </a>
    </div>

</div>

<hr>

<h2 style="text-align:center;">System Navigation</h2>

<a href="index.php">
    <button>Back to Home</button>
</a>

<br><br>

<a href="logout.php">
    <button>Logout</button>
</a>

</body>
</html>