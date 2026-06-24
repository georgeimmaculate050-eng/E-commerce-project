<?php
include 'db_connect.php';

$sql = "SELECT c.cart_id, p.product_name, p.price, c.quantity
        FROM cart c
        JOIN products p ON c.product_id = p.product_id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Shopping Cart</h1>

<table border="1" cellpadding="10">
<tr>
    <th>Cart ID</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
</tr>

<?php
$grand_total = 0;

while($row = mysqli_fetch_assoc($result))
{
    $total = $row['price'] * $row['quantity'];
    $grand_total += $total;
?>

<tr>
    <td><?php echo $row['cart_id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $total; ?></td>
</tr>

<?php
}
?>

<tr>
    <td colspan="4"><strong>Grand Total</strong></td>
    <td><strong><?php echo $grand_total; ?></strong></td>
</tr>

</table>

<br><br>
<a href="view_products.php">
    <button>Continue Shopping</button>
</a>

<br><br>

<a href="checkout.php">
    <button>Checkout</button>
</a>