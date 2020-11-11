<?php
include_once("config.php");
$sql= "SELECT id, pealkiri, autor, aasta, liik, keel, valjaandja, 
kogus, riiul, marksona, markused FROM book " ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	
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
	

	// update user data
	$result = mysqli_query($conn, "UPDATE book SET 
	pealkiri='$pealkiri',
	autor='$autor',
	aasta='$aasta',
	liik='$liik',
	keel='$keel',
	valjaandja='$valjaandja',
	kogus='$kogus',
	riiul='$riiul',
	marksona='$marksona', 
	markused='$markused'	
	WHERE id=$id");

	header("Location: book_data.php");
}
?>
<?php
$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT id, pealkiri, 
autor, aasta, liik, keel, valjaandja, kogus, riiul, marksona, markused FROM book WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$pealkiri = $row['pealkiri'];
	$autor = $row['autor'];
	$aasta = $row['aasta'];
	$liik = $row['liik'];
	$keel= $row['keel'];
	$valjaandja = $row['valjaandja'];
	$kogus = $row['kogus'];
	$riiul = $row['riiul'];
	$marksona = $row['marksona'];
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

	<form name="update_user" method="post" action="book_edit.php">
		<table id="table2">
			<tr>
				
			<tr><td>Pealkiri</td>
				<td><input type="text" name="pealkiri" value='<?php echo $pealkiri;?>'></td>
			</tr>
				<td>Autor</td>
				<td><input type="text" name="autor" value='<?php echo $autor;?>'></td>
			</tr>
			<tr>
			<td>Ilmumisaasta</td>
				<td><input type="text" name="aasta" value='<?php echo $aasta;?>'></td>
			</tr>
			<tr>
				<td>Liik</td>
				<td><input type="text" name="liik" value='<?php echo $liik;?>'></td>
			</tr>
			<tr>
				<td>Valjaandja</td>
				<td><input type="text" name="valjaandja" value='<?php echo $valjaandja;?>'></td>
			</tr>
			<tr>
				<td>Kogus</td>
				<td><input type="text" name="kogus" value='<?php echo $kogus;?>'></td>
			</tr>
			<tr>
			<td>Riiul</td>
				<td><input type="text" name="riiul" value='<?php echo $riiul;?>'></td>
			</tr>
			<tr>
				<td>Marksõna</td>
				<td><input type="text" name="marksona" value='<?php echo $marksona;?>'></td>
			</tr>
			<tr>
			<td>Markused</td>
				<td><input type="text" name="markused" value='<?php echo $markused;?>'></td>
			</tr>
			<tr>
			
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Muuda"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>