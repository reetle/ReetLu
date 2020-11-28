<?php
include_once("config.php");
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
<form action=" " form="form2" method="POST">
  <p>Millist meediat soovid maha kanda</p>  
	<input type="radio" name="select" value="book"> 		<label for="book">Raamat</label> <br>
	<input type="radio" name="select" value="textbook" > 	<label for="textbook">Õpik</label> <br>
	<input type="radio" name="select" value="periodicals">	<label for="periodicals">Perioodika</label> <br>
	<input type="radio" name="select" value="audio-video"> <label for="audio-video">Audio-video</label> <br>
	<input type="radio" name="select" value="workbook"> 	<label for="workbook">Töövihik</label> <br>
	<input type="radio" name="select"  value="meth-library"><label for="meth-library">Metoodiline kirjandus</label>
  <br>  
  <input type="submit" name="submit" value="Vali">
</form>


</div> 
<div class="item2"> </div>
 <div class="item3"> 
<form action=" " form="form3" method="POST"> 
 Inventari nr:<input type="text" name="search" value=" ">
			<input type ="submit" value="Otsi"> 
</form>			
 <style>
table, th, td {
    border: 1px solid black;
}
</style>
 <?php
 if (isset($_POST['select'])){
$select=$_POST['select'];

//Raamat
	if ($select == 'book') {
		$sql= "SELECT * FROM book limit 25;" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table>
		 <tr>
			<th>ID</th>
			<th>Pealkiri</th>
			<th>Autor</th>
			<th>Aasta</th>			
			<th>Liik</th>
			<th>Keel</th>
			<th>Väljaandja</th>
			<th>Kogus</th>			
			<th>Riiul</th>
			<th>Märksõna</th>
			<th>Markused</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
		<tr>
			<td>'.$row["id"].'</td> 
			<td>'.$row["pealkiri"].'</td> 
			<td>'.$row["autor"].'</td>
			<td>'.$row["aasta"].'</td>
			<td>'.$row["liik"].'</td>
			<td>'.$row["keel"].'</td>
			<td>'.$row["valjaandja"].'</td>
			<td>'.$row["kogus"].'</td>
			<td>'.$row["riiul"].'</td>
			<td>'.$row["marksona"].'</td>
			<td>'.$row["markused"].'</td>	
			<td><a href="write_book.php?id='.$row["id"].'">Kanna maha</a></td>
		</tr> '; }
   echo "</table>";
	}
}	 

//õpik
	elseif ($select == 'textbook' ) {	
		$sql= "SELECT * FROM textbook;" ;
		$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table>
		 <tr>
			<th>ID</th>
			<th>Pealkiri</th>
			<th>Klass</th>
			<th>Autor</th>
			<th>Aasta</th>			
			<th>Liik</th>
			<th>Keel</th>
			<th>Väljaandja</th>
			<th>Kogus</th>			
			<th>Riiul</th>
			<th>Märksõna</th>
			<th>Markused</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
		<tr>
			<td>'.$row["id"].'</td> 
			<td>'.$row["pealkiri"].'</td> 
			<td>'.$row["klass"].'</td> 
			<td>'.$row["autor"].'</td>
			<td>'.$row["aasta"].'</td>
			<td>'.$row["liik"].'</td>
			<td>'.$row["keel"].'</td>
			<td>'.$row["valjaandja"].'</td>
			<td>'.$row["kogus"].'</td>
			<td>'.$row["riiul"].'</td>
			<td>'.$row["marksona"].'</td>
			<td>'.$row["markused"].'</td>	
		</tr> '; }
   echo "</table>";
	}
}	

//perioodika
	elseif ($select == 'periodicals' ) {	
		$sql= "SELECT * FROM periodicals;" ;
		$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table>
		 <tr>
			<th>ID</th>
			<th>Pealkiri</th>
			<th>Aasta</th>			
			<th>Liik</th>
			<th>Keel</th>
			<th>Väljaandja</th>
			<th>Nr</th>			
			<th>Riiul</th>
			<th>Märksõna</th>
			<th>Markused</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
		<tr>
			<td>'.$row["id"].'</td> 
			<td>'.$row["pealkiri"].'</td> 
			<td>'.$row["aasta"].'</td>
			<td>'.$row["liik"].'</td>
			<td>'.$row["keel"].'</td>
			<td>'.$row["valjaandja"].'</td>
			<td>'.$row["nr"].'</td>
			<td>'.$row["riiul"].'</td>
			<td>'.$row["marksona"].'</td>
			<td>'.$row["markused"].'</td>	
		</tr> '; }
   echo "</table>";
	}	
}
//audio-video
	elseif($select == 'audio-video' ) {	
		$sql= "SELECT * FROM audio_video;" ;
		$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table>
		 <tr>
			<th>ID</th>
			<th>Pealkiri</th>
			<th>AV Tüüp</th>
			<th>Autor</th>
			<th>Aasta</th>			
			<th>Liik</th>
			<th>Keel</th>
			<th>Väljaandja</th>
			<th>Kogus</th>			
			<th>Riiul</th>
			<th>Märksõna</th>
			<th>Markused</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
		<tr>
			<td>'.$row["id"].'</td> 
			<td>'.$row["pealkiri"].'</td> 
			<td>'.$row["tuup"].'</td> 
			<td>'.$row["autor"].'</td>
			<td>'.$row["aasta"].'</td>
			<td>'.$row["liik"].'</td>
			<td>'.$row["keel"].'</td>
			<td>'.$row["valjaandja"].'</td>
			<td>'.$row["kogus"].'</td>
			<td>'.$row["riiul"].'</td>
			<td>'.$row["marksona"].'</td>
			<td>'.$row["markused"].'</td>	
		</tr> '; }
   echo "</table>";
	}
}	

//töövihik
	elseif ($select == 'workbook' ) {
		$sql= "SELECT * FROM workbook;" ;
		$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table>
		 <tr>
			<th>ID</th>
			<th>Pealkiri</th>
			<th>Klass</th>
			<th>Autor</th>
			<th>Aasta</th>			
			<th>Liik</th>
			<th>Keel</th>
			<th>Väljaandja</th>
			<th>Kogus</th>			
			<th>Riiul</th>
			<th>Märksõna</th>
			<th>Markused</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
		<tr>
			<td>'.$row["id"].'</td> 
			<td>'.$row["pealkiri"].'</td> 
			<td>'.$row["klass"].'</td> 
			<td>'.$row["autor"].'</td>
			<td>'.$row["aasta"].'</td>
			<td>'.$row["liik"].'</td>
			<td>'.$row["keel"].'</td>
			<td>'.$row["valjaandja"].'</td>
			<td>'.$row["kogus"].'</td>
			<td>'.$row["riiul"].'</td>
			<td>'.$row["marksona"].'</td>
			<td>'.$row["markused"].'</td>	
		</tr> '; }
   echo "</table>";
	}	
}
//metoodiline kirjandus
	elseif ($select == 'meth-library' ) {
		$sql= "SELECT * FROM met_library;" ;
		$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table>
		 <tr>
			<th>ID</th>	
			<th>Pealkiri</th>
			<th>MK Klass</th>
			<th>MK tüüp</th>
			<th>Autor</th>
			<th>Aasta</th>			
			<th>Liik</th>
			<th>Keel</th>
			<th>Väljaandja</th>
			<th>Kogus</th>			
			<th>Riiul</th>
			<th>Märksõna</th>
			<th>Markused</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
		<tr>
			<td>'.$row["id"].'</td> 
			<td>'.$row["pealkiri"].'</td> 		
			<td>'.$row["klass"].'</td> 
			<td>'.$row["tuup"].'</td> 
			<td>'.$row["autor"].'</td>
			<td>'.$row["aasta"].'</td>
			<td>'.$row["liik"].'</td>
			<td>'.$row["keel"].'</td>
			<td>'.$row["valjaandja"].'</td>
			<td>'.$row["kogus"].'</td>
			<td>'.$row["riiul"].'</td>
			<td>'.$row["marksona"].'</td>
			<td>'.$row["markused"].'</td>	
		</tr> '; }
   echo "</table>";
	}
}	}
 ?>

</div>	
<div class="item4"> </div>
</div>
</body>
</html>