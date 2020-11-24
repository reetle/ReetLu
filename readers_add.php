<?php
include_once("config.php");
?>
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
			<td>Maakond</td>
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
		$klass = mysqli_real_escape_string($conn, $_POST['klass']);
		$perekonnanimi = mysqli_real_escape_string($conn, $_POST['perekonnanimi']);
		$eesnimi = mysqli_real_escape_string($conn, $_POST['eesnimi']);
		$aadress = mysqli_real_escape_string($conn, $_POST['aadress']);
		$linn = mysqli_real_escape_string($conn, $_POST['linn']);
		$maakond = mysqli_real_escape_string($conn, $_POST['maakond']);
		$postiindeks = mysqli_real_escape_string($conn, $_POST['postiindeks']);
		$telefon = mysqli_real_escape_string($conn, $_POST['telefon']);
		$markused = mysqli_real_escape_string($conn, $_POST['markused']);
	

	
	$result = mysqli_query($conn, "INSERT INTO readers(klass, perekonnanimi, eesnimi, aadress, linn, maakond, ,postiindeks, telefon ,markused) 
	VALUES('$klass','$perekonnanimi','$eesnimi','$aadress','$linn','$maakond','$postiindeks', '$telefon','$markused')");
		echo "Uus lugeja lisatud";
	}
	?>
<div id="back_button">
<br><a href="readers_data.php">Tagasi</a>
</body>
</html>