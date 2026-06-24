<?php
include 'db_connect.php';

$sql = "SELECT * FROM orders ORDER BY order_id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
</head>
<body>

<h1>Order History</h1>

<table border="1" cellpadding="10">
<tr>
    <th>Order ID</th>
    <th>Customer ID</th>
    <th>Order Date</th>
    <th>Total Amount</th>
    <th>Order Status</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['order_id']; ?></td>
    <td><?php echo $row['customer_id']; ?></td>
    <td><?php echo $row['order_date']; ?></td>
    <td><?php echo $row['total_amount']; ?></td>
    <td><?php echo $row['order_status']; ?></td>
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