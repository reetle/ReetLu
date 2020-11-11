<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM book WHERE id=$id");

header("Location:book_data.php");
?>