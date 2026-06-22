<?php
include 'db_connect.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM products WHERE product_id=$id");
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['update']))
{
    $id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category = $_POST['category'];
    $image = $_POST['image'];

    $sql = "UPDATE products SET
            product_name='$product_name',
            description='$description',
            price='$price',
            stock_quantity='$stock_quantity',
            category='$category',
            image='$image'
            WHERE product_id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "<h3>Product Updated Successfully</h3>";
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
    <title>Update Product</title>
</head>
<body>

<h2>Update Product</h2>

<form method="POST">

    <input type="hidden" name="product_id"
           value="<?php echo $row['product_id']; ?>">

    Product Name:<br>
    <input type="text" name="product_name"
           value="<?php echo $row['product_name']; ?>" required><br><br>

    Description:<br>
    <textarea name="description" required><?php echo $row['description']; ?></textarea><br><br>

    Price:<br>
    <input type="number" step="0.01" name="price"
           value="<?php echo $row['price']; ?>" required><br><br>

    Stock Quantity:<br>
    <input type="number" name="stock_quantity"
           value="<?php echo $row['stock_quantity']; ?>" required><br><br>

    Category:<br>
    <input type="text" name="category"
           value="<?php echo $row['category']; ?>" required><br><br>

    Image:<br>
    <input type="text" name="image"
           value="<?php echo $row['image']; ?>"><br><br>

    <input type="submit" name="update" value="Update Product">

</form>

</body>
</html>