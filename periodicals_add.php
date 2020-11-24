<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>

<title>Lisa perioodika</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body> 



	<form action=" " method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Pealkiri</td>
				<td><input type="text" name="pealkiri"></td>
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
			<td>Nr</td>
				<td><input type="text" name="nr"></td>
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
		$pealkiri = mysqli_real_escape_string($conn, $_POST['pealkiri']);
		$aasta = mysqli_real_escape_string($conn, $_POST['aasta']);
		$liik = mysqli_real_escape_string($conn, $_POST['liik']);
		$keel= mysqli_real_escape_string($conn, $_POST['keel']);
		$valjaandja = mysqli_real_escape_string($conn, $_POST['valjaandja']);
		$nr = mysqli_real_escape_string($conn, $_POST['nr']);
		$riiul = mysqli_real_escape_string($conn, $_POST['riiul']);
		$marksona = mysqli_real_escape_string($conn, $_POST['marksona']);
		$markused = mysqli_real_escape_string($conn, $_POST['markused']);
	

	
	$result = mysqli_query($conn, "INSERT INTO periodicals (pealkiri, aasta, liik, keel,valjaandja, nr, riiul, marksona, markused) 
	VALUES('$pealkiri','$aasta', '$liik','$keel','$valjaandja','$nr', '$riiul','$marksona','$markused')");
		echo "Lisatud </a>";
	}
	?>
<div id="back_button">
<a href="periodicals_data.php">Tagasi</a>
</body>
</html>