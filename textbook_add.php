<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>

<title>Lisa Õpik</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body> 
<div class="add_data">


	<form action=" " method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Pealkiri</td>
				<td><input type="text" name="pealkiri"></td>
			</tr>
			<tr>
				<td>Klass</td>
				<td><input type="text" name="klass"></td>
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
		$pealkiri = mysqli_real_escape_string($conn, $_POST['pealkiri']);
		$klass = mysqli_real_escape_string($conn, $_POST['klass']);
		$autor = mysqli_real_escape_string($conn, $_POST['autor']);
		$aasta = mysqli_real_escape_string($conn, $_POST['aasta']);
		$liik = mysqli_real_escape_string($conn, $_POST['liik']);
		$keel= mysqli_real_escape_string($conn, $_POST['keel']);
		$valjaandja = mysqli_real_escape_string($conn, $_POST['valjaandja']);
		$kogus = mysqli_real_escape_string($conn, $_POST['kogus']);
		$riiul = mysqli_real_escape_string($conn, $_POST['riiul']);
		$marksona = mysqli_real_escape_string($conn, $_POST['marksona']);
		$markused = mysqli_real_escape_string($conn, $_POST['markused']);
	

	
	$result = mysqli_query($conn, "INSERT INTO textbook(pealkiri, klass, autor, aasta, liik, keel,valjaandja, kogus, riiul, marksona, markused) 
	VALUES('$pealkiri','$klass','$autor','$aasta', '$liik','$keel','$valjaandja','$kogus', '$riiul','$marksona','$markused')");
		echo " <p>Lisatud </p>";
	}
	?>
<button onclick="window.location.href='textbook_data.php';" >Tagasi</button>
</div>
</body>
</html>