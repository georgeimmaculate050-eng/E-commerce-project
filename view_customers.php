<?php
include 'db_connect.php';

$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);

echo "<h2>Customer Records</h2>";

while($row = mysqli_fetch_assoc($result)){
    echo "ID: " . $row['customer_id'] . "<br>";
    echo "First Name: " . $row['first name'] . "<br>";
    echo "Last Name: " . $row['last name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Phone: " . $row['phone'] . "<br>";
    echo "Address: " . $row['adress'] . "<br><hr>";
}
?>