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



	<form action="class_add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Klass</td>
				<td><input type="text" name="klass"></td>
			</tr>
			<tr>
				<td>Täht</td>
				<td><input type="text" name="taht"></td>
			</tr>
			<tr>
				<td>Klassijuhataja</td>
				<td><input type="text" name="klassijuhataja"></td>
			</tr>
			<tr>
				<td>Klassiruum</td>
				<td><input type="text" name="klassiruum"></td>
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
		$klass = mysqli_real_escape_string($conn, $_POST['klass']);
		$taht = mysqli_real_escape_string($conn, $_POST['taht']);
		$klassijuhataja = mysqli_real_escape_string($conn, $_POST['klassijuhataja']);
		$klassiruum = mysqli_real_escape_string($conn, $_POST['klassiruum']);
		$markused = mysqli_real_escape_string($conn,  $_POST['markused']);
	


	$result = mysqli_query($conn, "INSERT INTO class(klass, taht, klassijuhataja, klassiruum, markused) 
	VALUES('$klass','$taht','$klassijuhataja','$klassiruum','$markused')");
		echo "Lisatud";
	}
	?>
<div id="back_button">
<a href="class_data.php">Tagasi</a>
</body>
</html>