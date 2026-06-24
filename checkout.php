<?php
session_start();
include 'db_connect.php';

$sql = "SELECT c.quantity, p.price
        FROM cart c
        JOIN products p ON c.product_id = p.product_id";

$result = mysqli_query($conn, $sql);

$total_amount = 0;

while($row = mysqli_fetch_assoc($result))
{
    $total_amount += ($row['price'] * $row['quantity']);
}

if($total_amount > 0)
{
    $customer_id = 1;

$insert = "INSERT INTO orders(customer_id, order_date, total_amount, order_status)
           VALUES('$customer_id', NOW(), '$total_amount', 'Pending')";

    if(mysqli_query($conn, $insert))
    {
        mysqli_query($conn, "DELETE FROM cart");

        echo "<h2>Order Placed Successfully!</h2>";
        echo "<p>Total Amount: Ksh $total_amount</p>";
    }
}
else
{
    echo "Cart is Empty";
}
?>