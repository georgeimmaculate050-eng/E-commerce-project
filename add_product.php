<?php
include 'db_connect.php';

if(isset($_POST['submit']))
{
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category = $_POST['category'];
    $image = $_POST['image'];

    $sql = "INSERT INTO products
    (product_name, description, price, stock_quantity, category, image)
    VALUES
    ('$product_name', '$description', '$price', '$stock_quantity', '$category', '$image')";

    if(mysqli_query($conn, $sql))
    {
        echo "<h3>Product Added Successfully</h3>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

<form method="POST">

    <label>Product Name</label><br>
    <input type="text" name="product_name" required><br><br>

    <label>Description</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Price</label><br>
    <input type="number" step="0.01" name="price" required><br><br>

    <label>Stock Quantity</label><br>
    <input type="number" name="stock_quantity" required><br><br>

    <label>Category</label><br>
    <input type="text" name="category" required><br><br>

    <label>Image</label><br>
    <input type="text" name="image"><br><br>

    <input type="submit" name="submit" value="Add Product">

</form>

</body>
</html>