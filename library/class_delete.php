<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM class WHERE id=$id");

header("Location:class_data.php");
?>