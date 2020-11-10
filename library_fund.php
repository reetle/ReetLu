<?php
include_once("config.php");
$sql= "SELECT id, pealkiri, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksona FROM library_fund" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

?>
<!DOCTYPE html>
<html>
<head>
<title>Raamatukogu fond</title>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" /> <!-- avab lehe seadme suurusega-->
<link rel="stylesheet" href="styles.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/tableManager.js"></script>

</head>
<body> 
<div class="grid-container">
  <div class="item1">
</div> 

<div class="item2">
	<div class= "menu">
		<ul style="list-style-type:none">
			<li> <a href="book_data.php"> Raamatud</a> </li>  
			<li> <a href="textbook.php"> Õpikud </a></li>
			<li> <a href="periodicals.php">Perioodika</a></li>
			<li> <a href="audio.php">Audio-Video</a></li>	
			<li> <a href="workbook.php">Töövihikud</a></li>
			<li> <a href="meth_library.php">Metoodiline kirjandus</a></li>	<br>
			<li><a href="menu.php">Esilehele</a> </li>
			
		</ul>
	</div> 
	
<div class="item4">

</div>
</body>
</html>