<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM library_fund WHERE id=$id");

header("Location:book_data.php");
?>