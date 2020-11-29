<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM workbook WHERE id=$id") or die("error:".mysqli_error($conn));;
 echo "<table style='border:1px solid black;'>
   <tr>
	<th>Nr</th> 
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
	<td>'.$row["11"].'</td>	
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
<title>Laenutamine</title>

<body> 
<div class="grid-container">
  <div class="item1">  
  <form action=" " method="post" name="form1">
		<table width="25%" border="0">
					
			<tr>
				<td>Nimi</td>
				<td><input type="text" name="lugeja"></td>
			</tr>
			<tr>
				<td>Kogus</td>
				<td><input type="text" name="kogus"></td>
			</tr>
			<tr>
				<td>Kuupäev:</td>
				<td><input type="date" name="algus_kp"></td>
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
</div> 

<div class="item2"> </div>
 <div class="item3"> </div> 

<div class="item4"> </div>

</div>
</body>
</html>
