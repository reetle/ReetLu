<?php
include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$klass = $_POST['klass'];
	$perekonnanimi = $_POST['perekonnanimi'];
	$eesnimi = $_POST['eesnimi'];
	$aadress = $_POST['aadress'];
	$linn = $_POST['linn'];
	$maakond = $_POST['maakond'];
	$postiindeks = $_POST['postiindeks'];
	$telefon= $_POST['telefon'];
	$markused = $_POST['markused'];

	//kasutajate data
	$result = mysqli_query($conn, "UPDATE readers SET 
	klass='$klass',
	perekonnanimi='$perekonnanimi',
	eesnimi='$eesnimi',
	aadress='$aadress',
	linn='$linn',
	maakond='$maakond',
	postiindeks='$postiindeks',
	telefon='$telefon',
	markused='$markused'
	WHERE id=$id");

	//pärast muudatust lehele tagasi
	header("Location: readers_data.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM readers WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$klass= $row['klass'];
	$perekonnanimi = $row['perekonnanimi'];
	$eesnimi = $row['eesnimi'];
	$aadress = $row['aadress'];
	$linn = $row['linn'];
	$maakond = $row['maakond'];
	$postiindeks = $row['postiindeks'];
	$telefon= $row['telefon'];
	$markused = $row['markused'];
}
?>
<html>
<head>
<link rel="stylesheet" href="styles.css">
	<title>Muuda</title>
</head>

<body>
	<br/><br/>

	<form name="update_user" method="post" action="readers_edit.php">
		<table id="table2">
			<tr>
				<td>Klass</td>
				<td> <input type="text" name="klass" value='<?php echo $klass;?>'></td>
			</tr>
			<tr><td>Perekonnanimi</td>
				<td><input type="text" name="perekonnanimi" value='<?php echo $perekonnanimi;?>'></td>
			</tr>
			<tr>
				<td>Eesnimi</td>
				<td><input type="text" name="eesnimi" value='<?php echo $eesnimi;?>'></td>
			</tr>
			<tr>
				<td>Aadress</td>
				<td><input type="text" name="aadress" value='<?php echo $aadress;?>'</td>
			</tr>
			<tr>
				<td>Linn</td>
				<td><input type="text" name="linn" value='<?php echo $linn;?>'></td>
			</tr>
			<tr>
			<td>Maakond</td>
				<td><input type="text" name="maakond" value='<?php echo $maakond;?>'></td>
			</tr>
			<tr>
				<td>Postiindeks</td>
				<td><input type="text" name="postiindeks" value='<?php echo $postiindeks;?>'></td>
			</tr>
			<tr>
				<td>telefon</td>
				<td><input type="text" name="telefon" value='<?php echo $telefon;?>'></td>
			</tr>
			<tr>
				<td>markused</td>
				<td><input type="text" name="markused" value='<?php echo $markused;?>'></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value='<?php echo $_GET['id'];?>'></td>
				<td><input type="submit" name="update" value="Muuda lugeja andmed"></td> 
			</tr>
		</table>
	</form>
</body>
</html>