<?php
session_start();

$_SESSION['user'] = "Imma";

echo "<h2>Dashboard</h2>";
echo "Welcome, " . $_SESSION['user'];
?>