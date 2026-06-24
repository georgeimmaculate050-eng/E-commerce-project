<?php
include 'db_connect.php';

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $sql = "SELECT * FROM products
            WHERE product_name LIKE '%$search%'
            OR category LIKE '%$search%'";
}
else
{
    $sql = "SELECT * FROM products";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="GET">
    <input type="text" name="search" placeholder="Search products">

    <input type="submit" value="Search">
</form>

<br>

<div class="product-grid">

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<div class="product-card">

    <img src="images/<?php echo $row['image']; ?>">

    <h3><?php echo $row['product_name']; ?></h3>

    <p><?php echo $row['description']; ?></p>

    <p><strong>Ksh <?php echo $row['price']; ?></strong></p>

    <p>Stock: <?php echo $row['stock_quantity']; ?></p>

    <p>Category: <?php echo $row['category']; ?></p>

    <a href="update_product.php?id=<?php echo $row['product_id']; ?>">
        <button>Update</button>
    </a>

    <a href="delete_product.php?id=<?php echo $row['product_id']; ?>">
        <button>Delete</button>
    </a>

    <a href="add_to_cart.php?id=<?php echo $row['product_id']; ?>">
        <button>Add to Cart</button>
    </a>

</div>

<?php
}
?>

</div>

<br><br>

<a href="dashboard.php">
    <button>Back to Dashboard</button>
</a>

</body>
</html>