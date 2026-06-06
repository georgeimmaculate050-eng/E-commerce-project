<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" value="Login">
</form>

<?php
if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234") {
        echo "Login Successful";
    } else {
        echo "Invalid Username or Password";
    }
}
?>

</body>
</html>