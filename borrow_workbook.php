
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Laenutamine</title>
</head>
<body> 
  <div class="borrow">  
  <br>
  <p> Laenuta raamat: </p>
<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM workbook WHERE id=$id") or die("error:".mysqli_error($conn));;
 echo "<table class='table table-bordered table-sm' style='width:75%;'>
   <tr>
	<th>NR</th> 
	<th>Pealkiri</th>
	<th>Klass</th>
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
	<td>'.$row["10"].'</td>	
	<td>'.$row["11"].'</td>	
  </tr> '; 
   echo "</table>";
	//var_dump($row);
}	

?>
<br>
<p>Raamatu laenutamiseks täida väljad:</p>
  <form action=" " method="post" name="form1">
		<table width="25%" border="0">
					
			<tr>
				<td>Nimi</td>
				<td><input type="text" name="lugeja" required></td>
			</tr>
			<tr>
				<td>Kogus</td>
				<td><input type="text" name="kogus" required></td>
			</tr>
			<tr>
				<td>Kuupäev:</td>
				<td><input type="date" name="algus_kp" required></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Laenuta"></td>
			</tr>
		</table>
	</form>
<?php	
	if(isset($_POST['Submit'])) {
		$lugeja= mysqli_real_escape_string($conn, $_POST['lugeja']);
		$kogus = mysqli_real_escape_string($conn, $_POST['kogus']);
		$algus_kp = mysqli_real_escape_string($conn, $_POST['algus_kp']);
	

$result = mysqli_query($conn, "INSERT INTO borrow_book (lugeja, meedia_id, meedia_liik, pealkiri, autor, kogus, algus_kp)
SELECT '$lugeja', workbook.id, 'TV', workbook.pealkiri, workbook.autor, '$kogus', '$algus_kp'
FROM workbook WHERE workbook.id=$id");
	header("Location: workbook_data.php");

}
?> 
<div class="back_but">
<button onclick="window.location.href='workbook_data.php';" >Tagasi</button>
</div> 
</div>

</body>
</html>
