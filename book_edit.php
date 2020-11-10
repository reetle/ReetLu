<?php
include_once("config.php");
$sql= "SELECT id, meedia_liik, pealkiri, klass, andmekandja, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksona FROM library_fund " ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

if(isset($_POST['update']))
{
	$id = $_POST['id'];

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
	

	// update user data
	$result = mysqli_query($conn, "UPDATE library_fund SET 
	meedia_liik='$meedia_liik',
	pealkiri='$pealkiri',
	klass='$klass',
	andmekandja='$andmekandja',
	autor='$autor',
	ilmumisaasta='$ilmumisaasta',
	liik='$liik',
	keel='$keel',
	valjaandja='$valjaandja',
	kogus='$kogus',
	riiul='$riiul',
	marksõna='$marksõna' 	
	WHERE id=$id");

	header("Location: book_data.php");
}
?>
<?php
$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT id, meedia_liik, pealkiri, klass, andmekandja, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksona FROM library_fund WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$meedia_liik =$row['meedia_liik'];
	$pealkiri = $row['pealkiri'];
	$klass = $row['klass'];
	$andmekandja = $row['andmekandja'];
	$autor = $row['autor'];
	$ilmumisaasta = $row['ilmumisaasta'];
	$liik = $row['liik'];
	$keel= $row['keel'];
	$valjaandja = $row['valjaandja'];
	$kogus = $row['kogus'];
	$riiul = $row['riiul'];
	$marksona = $row['marksona'];
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
				<td>meedia_liik</td>
			<td>		
			<select id="meedia_liik" name="meedia_liik">
			<option value="ra"> Raamat</option>
			<option value="op" >Õpik</option>
			<option value="pe"> Perioodika</option>
			<option value="av"> Audio-Video</option>
			<option value="tv"> Töövihik</option> 
			<option value="mk"> Methoodiline kirjandus</option><br>
			</select> 
			</td>
			</tr>
			<tr><td>Pealkiri</td>
				<td><input type="text" name="pealkiri" value='<?php echo $pealkiri;?>'></td>
			</tr>
			<tr>
				<td>Klass</td>
				<td><input type="text" name="klass" value='<?php echo $klass;?>'></td>
			</tr>
			<tr>
				<td>Andmekandja</td>
				<td><input type="text" name="aadress" value='<?php echo $andmekandja;?>'></td>
			</tr>
			<tr>
				<td>Autor</td>
				<td><input type="text" name="autor" value='<?php echo $autor;?>'></td>
			</tr>
			<tr>
			<td>Ilmumisaasta</td>
				<td><input type="text" name="ilmumisaasta" value='<?php echo $ilmumisaasta;?>'></td>
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
			
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Muuda"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>