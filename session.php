<?php
session_start();
if (!isset($_SESSION['session'])) {
  header('Location: index.php');
  exit();
  }
?>
<h1>Tere tulemast <?PHP print $_SESSION['session']; ?>!</h1>