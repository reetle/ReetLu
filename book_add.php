<!DOCTYPE html>
<html>
<head>

<title>Lisa raamat</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body> 



	<form action="book_add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Pealkiri</td>
				<td><input type="text" name="pealkiri"></td>
			</tr>
			<tr>
				<td>Autor</td>
				<td><input type="text" name="autor"></td>
			</tr>
			<tr>
			<td>Ilmumisaasta</td>
				<td><input type="text" name="aasta"></td>
			</tr>
			<tr>
				<td>Liik</td>
				<td><input type="text" name="liik"></td>
			</tr>
			<tr>
				<td>Keel</td>
				<td><input type="text" name="keel"></td>
			</tr>
			<tr>
			<td>Väljaanda</td>
				<td><input type="text" name="valjaandja"></td>
			</tr>
			<tr>
			<td>Kogus</td>
				<td><input type="text" name="kogus"></td>
			</tr>
			<tr>
				<td>Riiul</td>
				<td><input type="text" name="riiul"></td>
			</tr>
			<tr>
				<td>Märksõna</td>
				<td><input type="text" name="marksona"></td>
			</tr>
			<tr>
			<td>Märkused</td>
				<td><input type="text" name="markused"></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Lisa"></td>
			</tr>
		</table>
	</form>

	<?php
	if(isset($_POST['Submit'])) {
		$pealkiri = $_POST['pealkiri'];
		$autor = $_POST['autor'];
		$aasta = $_POST['aasta'];
		$liik = $_POST['liik'];
		$keel= $_POST['keel'];
		$valjaandja = $_POST['valjaandja'];
		$kogus = $_POST['kogus'];
		$riiul = $_POST['riiul'];
		$marksona = $_POST['marksona'];
		$markused = $_POST['markused'];
	

	include_once("config.php");
	$result = mysqli_query($conn, "INSERT INTO book(pealkiri, autor, aasta, liik, keel,valjaandja, kogus, riiul, marksona, markused) 
	VALUES('$pealkiri','$autor','$aasta', '$liik','$keel','$valjaandja','$kogus', '$riiul','$marksona','$markused')");
		echo "Lisatud </a>";
	}
	?>
<div id="back_button">
<a href="book_data.php">Tagasi</a>
</body>
</html>