<?php
include_once("config.php");

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

	// Redirect to homepage to display updated user in list
	header("Location: book_data.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT meedia_liik, pealkiri, klass, andmekandja, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksõna FROM library_fund WHERE id=$id");

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
	$marksõna = $row['marksõna'];
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
			<option value="ra">Raamat</option>
			<option value="op" >Õpik</option>
			<option value="pe">Perioodika</option>
			<option value="av">Audio-Video</option>
			<option value="tv">Töövihik</option> 
			<option value="mk">Methoodiline kirjandus</option><br>
			</select> 
			</td>
			</tr>
			<tr><td>pealkiri</td>
				<td><input type="text" name="pealkiri" value='<?php echo $pealkiri;?>'></td>
			</tr>
			<tr>
				<td>klass</td>
				<td><input type="text" name="klass" value='<?php echo $klass;?>'></td>
			</tr>
			<tr>
				<td>andmekandja</td>
				<td><input type="text" name="aadress" value='<?php echo $andmekandja;?>'></td>
			</tr>
			<tr>
				<td>autor</td>
				<td><input type="text" name="autor" value='<?php echo $autor;?>'></td>
			</tr>
			<tr>
			<td>ilmumisaasta</td>
				<td><input type="text" name="ilmumisaasta" value='<?php echo $ilmumisaasta;?>'></td>
			</tr>
			<tr>
				<td>liik</td>
				<td><input type="text" name="liik" value='<?php echo $liik;?>'></td>
			</tr>
			<tr>
				<td>valjaandja</td>
				<td><input type="text" name="valjaandja" value='<?php echo $valjaandja;?>'></td>
			</tr>
			<tr>
				<td>kogus</td>
				<td><input type="text" name="kogus" value='<?php echo $kogus;?>'></td>
			</tr>
			<tr>
			<td>riiul</td>
				<td><input type="text" name="riiul" value='<?php echo $riiul;?>'></td>
			</tr>
			<tr>
				<td>marksõna</td>
				<td><input type="text" name="marksõna" value='<?php echo $marksõna;?>'></td>
			</tr>
			<tr>
			
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>