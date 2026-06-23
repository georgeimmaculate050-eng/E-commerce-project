<?php
include 'db_connect.php';

if(isset($_GET['id']))
{
    $product_id = $_GET['id'];

    $check = mysqli_query($conn, "SELECT * FROM cart WHERE product_id='$product_id'");

    if(mysqli_num_rows($check) > 0)
    {
        mysqli_query($conn,
        "UPDATE cart
         SET quantity = quantity + 1
         WHERE product_id='$product_id'");
    }
    else
    {
        mysqli_query($conn,
        "INSERT INTO cart (product_id, quantity)
         VALUES ('$product_id', 1)");
    }

    header("Location: cart.php");
    exit();
}
?>