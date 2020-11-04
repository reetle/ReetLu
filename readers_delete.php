<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM readers WHERE id=$id");

header("Location:readers_data.php");
?>