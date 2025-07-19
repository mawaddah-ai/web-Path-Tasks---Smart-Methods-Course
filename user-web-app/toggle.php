<?php
$conn = new mysqli("localhost", "root", "", "my_database");

$id = $_GET['id'];
$conn->query("UPDATE users SET status = 1 - status WHERE id = $id");

$conn->close();
?>
