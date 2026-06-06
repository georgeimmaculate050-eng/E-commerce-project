<!DOCTYPE html>
<html>
<body>

<h2>Contact Form</h2>

<form method="post">

Name:
<input type="text" name="name"><br><br>

Email:
<input type="email" name="email"><br><br>

Message:
<textarea name="message"></textarea><br><br>

<input type="submit" value="Send Message">

</form>

<?php
if(isset($_POST['name'])) {

echo "Message Sent Successfully";

}
?>

</body>
</html>