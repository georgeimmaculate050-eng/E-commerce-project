<?php
include 'db_connect.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
</head>
<body>

<h1>Products</h1>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Category</th>
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