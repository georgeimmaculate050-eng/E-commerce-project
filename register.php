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
if(isset($_POST['name'])) {

echo "Registration Successful";

}
?>

</body>
</html>