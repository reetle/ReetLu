<?php
include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$klass = $_POST['klass'];
	$taht = $_POST['taht'];
	$klassijuhataja = $_POST['klassijuhataja'];
	$klassiruum = $_POST['klassiruum'];
	$markused = $_POST['markused'];

	
	$result = mysqli_query($conn, "UPDATE class SET 
	klass='$klass',
	taht='$taht',
	klassijuhataja='$klassijuhataja',
	klassiruum='$klassiruum',
	markused='$markused' 	
	WHERE id=$id");

	header("Location: class_data.php");
}
?>
<?php


$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM class WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$klass= $row['klass'];
	$taht = $row['taht'];
	$klassijuhataja = $row['klassijuhataja'];
	$klassiruum = $row['klassiruum'];
	$markused = $row['markused'];
}
?>
<html>
<head>
	<title>Muuda</title>
</head>

<body>
	<br/><br/>

	<form name="update_user" method="post" action="class_edit.php">
		<table id="table2">
			<tr>
				<td>Klass</td>
				<td><input type="text" name="klass" value='<?php echo $klass;?>'></td>
			</tr>
			<tr>
				<td>taht</td>
				<td><input type="text" name="taht" value='<?php echo $taht;?>'></td>
			</tr>
			<tr>
				<td>klassijuhataja</td>
				<td><input type="text" name="klassijuhataja" value='<?php echo $klassijuhataja;?>'></td>
			</tr>
			<tr>
				<td>klassiruum</td>
				<td><input type="text" name="klassiruum" value='<?php echo $klassiruum;?>'></td>
			</tr>
			<tr>
				<td>markused</td>
				<td><input type="text" name="markused" value='<?php echo $markused;?>'></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value='<?php echo $_GET['id'];?>'></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>