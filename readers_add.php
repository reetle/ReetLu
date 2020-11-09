<!DOCTYPE html>
<html>
<head>

<title>Lisa klass</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body> 

	<form action="readers_add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Klass</td>
				<td><input type="text" name="klass"></td>
			</tr>
			<tr>
				<td>Perekonnanimi</td>
				<td><input type="text" name="perekonnanimi"></td>
			</tr>
			<tr>
				<td>Eesnimi</td>
				<td><input type="text" name="eesnimi"></td>
			</tr>
			<tr>
				<td>Aadress</td>
				<td><input type="text" name="aadress"></td>
			</tr>
			<tr>
				<td>Linn</td>
				<td><input type="text" name="linn"></td>
			</tr>
			<tr>
			<td>maakond</td>
				<td><input type="text" name="maakond"></td>
			</tr>
			<tr>
				<td>Postiindeks</td>
				<td><input type="text" name="postiindeks"></td>
			</tr>
			<tr>
				<td>Telefon</td>
				<td><input type="text" name="telefon"></td>
			</tr>
			<tr>
				<td>Märkused</td>
				<td><input type="text" name="markused"></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Lisa uus lugeja"></td>
			</tr>
		</table>
	</form>

	<?php
	if(isset($_POST['Submit'])) {
		$klass = $_POST['klass'];
		$perekonnanimi = $_POST['perekonnanimi'];
		$eesnimi = $_POST['eesnimi'];
		$aadress = $_POST['aadress'];
		$linn = $_POST['linn'];
		$maakond = $_POST['maakond'];
		$postiindeks = $_POST['postiindeks'];
		$telefon = $_POST['telefon'];
		$markused = $_POST['markused'];
	

	include_once("config.php");
	$result = mysqli_query($conn, "INSERT INTO readers(klass, perekonnanimi, eesnimi, linn, maakond, postiindeks, telefon ,markused) 
	VALUES('$klass','$perekonnanimi','$eesnimi','$linn','$maakond','$postiindeks', '$telefon','$markused')");
		echo "Uus lugeja lisatud";
	}
	?>
<div id="back_button">
<br><a href="readers_data.php">Tagasi</a>
</body>
</html>