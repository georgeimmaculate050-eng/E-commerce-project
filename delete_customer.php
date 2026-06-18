<?php
include 'db_connect.php';

$sql = "DELETE FROM customers
WHERE customer_id = 1";

if(mysqli_query($conn, $sql)){
    echo "Record Deleted Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>