<?php
include_once("config.php");
/*$result = mysqli_query($conn, "SELECT * FROM book WHERE id=$id") or die("error:".mysqli_error($conn));;
 echo "<table style='border:1px solid black;'>
   <tr>
	<th>Nr</th> 
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
}	*/

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
				<td>Kuupäev:</td>
				<td><input type="date" name="tagastus_kp"></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Tagasta"></td>
			</tr>
		</table>
	</form>
<?php	
	if(isset($_POST['Submit'])) {
		$tagastus_kp = mysqli_real_escape_string($conn, $_POST['tagastus_kp']);
	

$result = mysqli_query($conn," UPDATE borrow_book SET
	tagastus_kp='$tagastus_kp'	
	WHERE id=$id");
	header("Location: borrow.php");
}
?> 
</div> 

<div class="item2"> </div>
 <div class="item3"> </div> 

<div class="item4"> </div>

</div>
</body>
</html>
