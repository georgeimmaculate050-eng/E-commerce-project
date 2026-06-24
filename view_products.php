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
</head>
<body>

<form method="GET">
    <input type="text" name="search" placeholder="Search products">

    <input type="submit" value="Search">
</form>

<br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Category</th>
    <th>Image</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['stock_quantity']; ?></td>
    <td><?php echo $row['category']; ?></td>
    <td>
    <img src="images/<?php echo $row['image']; ?>"
         width="100"
         height="100">
    <br>
    <?php echo $row['image']; ?>
</td>

</td>

<td>
    <td>
    <a href="update_product.php?id=<?php echo $row['product_id']; ?>">Update</a>
|
<a href="delete_product.php?id=<?php echo $row['product_id']; ?>">Delete</a>
|
<a href="add_to_cart.php?id=<?php echo $row['product_id']; ?>">Add to Cart</a> 
</td>
</tr>
<?php
}
?>

</table>

<br><br>

<a href="dashboard.php">
    <button>Back to Dashboard</button>
</a>

</body>
</html>