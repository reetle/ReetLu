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
				<td>Meedia liik</td>
			<td>		
			<select id="meedia_liik" name="meedia_liik">
			<option value="ra">Raamat</option>
			<option value="op" >Õpik</option>
			<option value="pe">Perioodika</option>
			<option value="av">Audio-Video</option>
			<option value="tv">Töövihik</option> 
			<option value="mk">Methoodiline kirjandus</option><br>
			</select> 
			</td>
			</tr>
			<tr>
				<td>Pealkiri</td>
				<td><input type="text" name="pealkiri"></td>
			</tr>
			<tr>
				<td>Klass</td>
				<td><input type="text" name="klass"></td>
			</tr>
			<tr>
				<td>Andmekandja</td>
				<td><input type="text" name="andmekandja"></td>
			</tr>
			<tr>
				<td>Autor</td>
				<td><input type="text" name="autor"></td>
			</tr>
			<tr>
			<td>Ilmumisaasta</td>
				<td><input type="text" name="ilmumisaasta"></td>
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
			<td>valjaanda</td>
				<td><input type="text" name="valjaandja"></td>
			</tr>
			<tr>
			<td>Kogus</td>
				<td><input type="text" name="kogus"></td>
			</tr>
			<tr>
				<td>riiul</td>
				<td><input type="text" name="riiul"></td>
			</tr>
			<tr>
				<td>Märksõna</td>
				<td><input type="text" name="marksõna"></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php
	if(isset($_POST['Submit'])) {
		$meedia_liik = $_POST['meedia_liik'];
		$pealkiri = $_POST['pealkiri'];
		$klass = $_POST['klass'];
		$andmekandja = $_POST['andmekandja'];
		$autor = $_POST['autor'];
		$ilmumisaasta = $_POST['ilmumisaasta'];
		$liik = $_POST['liik'];
		$keel= $_POST['keel'];
		$valjaandja = $_POST['valjaandja'];
		$kogus = $_POST['kogus'];
		$riiul = $_POST['riiul'];
		$marksõna = $_POST['marksõna'];
	

	include_once("config.php");
	$result = mysqli_query($conn, "INSERT INTO library_fund(meedia_liik, pealkiri,klass, andmekandja, autor, ilmumisaasta, liik, keel,valjaandja, kogus, riiul, marksõna) 
	VALUES('$meedia_liik','$pealkiri','$klass','$andmekandja','$autor','$ilmumisaasta', '$liik','$keel','$valjaandja','$kogus', '$riiul','$marksõna')");
		echo "Lisatud <a href='book_data.php'>Tagasi</a>";
	}
	?>
<div id="back_button">
<a href="bookk.data.php">Tagasi esilehele</a>
</body>
</html>