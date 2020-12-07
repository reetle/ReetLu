
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Mahakandmine</title>

</head>
<body> 
  <div class="borrow">  
  <br>
 <p> Kas sa soovid antud perioodikat maha kanda: </p>
 <?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM periodicals WHERE id=$id") or die("error:".mysqli_error($conn));;
 echo "<table class='table table-bordered table-sm' style='width:75%;'>
   <tr>
	<th>Nr</th> 
	<th>Pealkiri</th>
	<th>Aasta</th>
	<th>Liik</th>
	<th>Keel</th>
	<th>Valjaandja</th>
	<th>Nr</th>
	<th>Riiul</th>
	<th>Märksõna</th>
	<th>Märkused</th>
	</tr>";
while($row = mysqli_fetch_row($result)){
	
	 echo '
  <tr>
	<td> '.$row["0"].'</td> 
	<td>'.$row["1"].'</td> 
	<td>'.$row["2"].'</td>
	<td>'.$row["3"].'</td>
	<td>'.$row["4"].'</td>
	<td>'.$row["5"].'</td>
	<td>'.$row["6"].'</td>
	<td>'.$row["7"].'</td>
	<td>'.$row["8"].'</td>
	<td>'.$row["9"].'</td>
  </tr> '; 
   echo "</table>";
	//var_dump($row);
}	

?>
<br>
<p>Mahakandmiseks täida väljad:</p>
  <form action=" " method="post" name="form1">
		<table width="25%" border="0">
		<tr>
					<td>Akti nr:</td>
				<td><input type="text" name="akt_nr" required></td>
			</tr>
			<tr>
				<td>Mahakandmise põhjus:</td>
				<td><input type="text" name="pohjus" required></td>
			</tr>
			<tr>
				<td>Kuupäev:</td>
				<td><input type="date" name="kuupaev" required></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Kanna maha"></td>
			</tr>
		</table>
	</form>
<?php

	
	if(isset($_POST['Submit'])) {
		$akt_nr = mysqli_real_escape_string($conn, $_POST['akt_nr']);
		$pohjus = mysqli_real_escape_string($conn, $_POST['pohjus']);
		$kuupaev = mysqli_real_escape_string($conn, $_POST['kuupaev']);
	

$result = mysqli_query($conn, "INSERT INTO write_off (akt_nr, kuupaev, meedia_liik, meedia_id, pealkiri, pohjus)
SELECT '$akt_nr', '$kuupaev' , 'PE', periodicals.id, periodicals.pealkiri, '$pohjus'
FROM periodicals WHERE periodicals.id=$id");

$result = mysqli_query($conn, "DELETE FROM periodicals WHERE id=$id");
	header("Location: periodicals_data.php");
}
?> 
<div class="back_but">
<button onclick="window.location.href='periodicals_data.php';">Tühista</button>
</div> 
</div>
</body>
</html>
