<?php
include 'db_connect.php';

$sql = "UPDATE customers
SET email='updated@gmail.com'
WHERE customer_id=1";

if(mysqli_query($conn, $sql)){
    echo "Record Updated Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>