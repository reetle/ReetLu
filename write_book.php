<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM book WHERE id=$id") or die("error:".mysqli_error($conn));;
 echo "<table>
 <tr> 
	<th>Id</th> 
	<th>Pealkiri</th>
	<th>Autor</th>
	<th>Aasta</th>
	<th>Liik</th>
	<th>Keel</th>
	<th>Valjaandja</th>
	<th>Kogus</th>
	<th>Riiul</th>
	<th>Märksõna</th>
	<th>Märkused</th>
	</tr>";
while($row = mysqli_fetch_row($result)){
	
	 echo '
  <tr>
	<td '.$row["0"].'</td> 
	<td>'.$row["1"].'</td> 
	<td>'.$row["2"].'</td>
	<td>'.$row["3"].'</td>
	<td>'.$row["4"].'</td>
	<td>'.$row["5"].'</td>
	<td>'.$row["6"].'</td>
	<td>'.$row["7"].'</td>
	<td>'.$row["8"].'</td>
	<td>'.$row["9"].'</td>
	<td>'.$row["10"].'</td>	
  </tr> '; 
   echo "</table>";
	//var_dump($row);
}	

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<title>Mahakandmine</title>
</head>
<body> 
<div class="grid-container">
  <div class="item1">  
  <form action=" " method="post" name="form1">
		<table width="25%" border="0">
					<td>Akti nr:</td>
				<td><input type="text" name="akt_nr"></td>
			</tr>
			<tr>
				<td>Mahakandmise põhjus:</td>
				<td><input type="text" name="pohjus"></td>
			</tr>
			<tr>
				<td>Kuupäev:</td>
				<td><input type="date" name="kuupaev"></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Kanna maha"></td>
			</tr>
		</table>
	</form>
<?php
	$id = $_GET['id'];
	
	if(isset($_POST['Submit'])) {
		$akt_nr = mysqli_real_escape_string($conn, $_POST['akt_nr']);
		$pohjus = mysqli_real_escape_string($conn, $_POST['pohjus']);
		$kuupaev = mysqli_real_escape_string($conn, $_POST['kuupaev']);
	

$result = mysqli_query($conn, "INSERT INTO write_off (akt_nr,kuupaev, meedia_liik, meedia_id, pealkiri, autor, pohjus)
SELECT $akt_nr, '$kuupaev' , 'RA', book.id, book.pealkiri, book.autor, '$pohjus'
FROM book WHERE book.id=$id");

$result = mysqli_query($conn, "DELETE FROM book WHERE id=$id");
}
?> 
</div> 

<div class="item2"> </div>
 <div class="item3"> </div> 

<div class="item4"> </div>

</div>
</body>
</html>
