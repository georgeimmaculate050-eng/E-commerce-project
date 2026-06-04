<?php
$name = "";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Input Handling</title>
</head>
<body>

<h2>Enter Your Name</h2>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if($name != "") {
    echo "<h3>Hello, $name</h3>";
}
?>

</body>
</html>