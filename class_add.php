<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Lisa klass</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body> 

<div class="add_data">

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
		echo "Lisatud";	}
	?>
<div id="back_but">
<button onclick="window.location.href='class_data.php';" >Tagasi</button>
</div>
</div>
</body>
</html>