<?php
include 'db_connect.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE product_id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "Product Deleted Successfully";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>