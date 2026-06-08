<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form method="post">

Name:
<input type="text" name="name"><br><br>

Email:
<input type="email" name="email"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" value="Register">

</form>

<?php
include 'db_connect.php';

if(isset($_POST['name'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO customers (`first name`, email, password, `last name`, phone, adress)
VALUES ('$name', '$email', '$password', 'N/A', 'N/A', 'N/A')";

if(mysqli_query($conn, $sql)){
    echo "Registration Successful";
} else {
    echo "Error: " . mysqli_error($conn);
}

}
?>