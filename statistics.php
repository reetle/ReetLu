<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Statistika</title>
</head>
<body>
<div class="grid-container">
  <div class="item1">
  <form action=" " method="POST" class="vorm">
		<select name="column">
			<option value="fond">Raamatukogu fond</option>
			<option value="readers">Lugejad</option>
			<option value="data">Lisaandmed</option>
			<option value="readers1">Laenutus - lugejad</option>
			<option value="format">Laenutus - Liik</option>
			<option value="languges">Laenutus - Keel</option>		
		</select> 
			<input type="submit" value="Näita">  
		</form>
		<br>
</div> 

<div class="item2">
	<?php
include_once("menu.php");
?>
</div> 
<div class="item3">


 <!--  <tr>
   <th>Klass</th>
   <th>Lugejad</th>
   <tr> -->
<?php
if (isset($_POST['column'])){
$column=$_POST['column'];

//Raamatukogu fond
if ($_POST['column'] == 'fond') {
	$sql= "SELECT 'Raamatud', COUNT(*) as C, SUM(kogus) as S  FROM book
			UNION
			SELECT 'Õpikud', COUNT(*) as C, SUM(kogus) as S  FROM textbook
			UNION
			SELECT 'Audio-video', COUNT(*) as C, SUM(kogus) as S  FROM audio_video
			UNION
			SELECT 'Töövihikud', COUNT(*) as C, SUM(kogus) as S  FROM workbook
			UNION
			SELECT 'Metoodiline kirjandus', COUNT(*) as C, SUM(kogus) as S  FROM met_library;" ;
	$result = mysqli_query($conn, $sql);
	
	
	if (mysqli_num_rows($result) > 0) {
		 echo "<table class='table table-sm table-hover' style='width:75%;'><tr><th>Liik</th><th>Erinevad</th><th>Kokku</th><th>Summa</th></tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
  <tr>
	<td>'.$row["Raamatud"].'</td>
	<td>'.$row["C"].'</td>
	<td>'.$row["S"].'</td>
	<td>'.$row["S"].'</td>

  </tr> '; }
   echo "</table>";
	}
}	
//lugejad
elseif ($_POST['column']== 'readers' ) {	
	$sql= "SELECT klass as Klass, COUNT(*) as Lugejad FROM readers GROUP BY klass;" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table class='table table-sm table-hover' style='width:75%;'><tr><th>Klass</th><th>Lugejad</th></tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
  <tr>
	<td>'.$row["Klass"].'</td>
	<td>'.$row["Lugejad"].'</td>
  </tr> '; }
   echo "</table>";
	}
}
//lisaandmed
elseif ($_POST['column'] == 'data' ) {	
	$sql= "SELECT 'Autorid',  COUNT(*) as C FROM author
		UNION
		SELECT 'Väljaandjad',  COUNT(*) as C FROM publisher
		UNION
		SELECT 'Liigid',  COUNT(*) as C FROM format
		UNION
		SELECT 'Audio-Video tüübid',  COUNT(*) as C FROM audio_video_type
		UNION
		SELECT 'Met.kirjanduse tüübid',  COUNT(*)as C FROM meth_library_type
		UNION
		SELECT 'Keeled',  COUNT(*) as C FROM languages
		UNION
		SELECT 'Märksõnad',  COUNT(*) as C FROM keyword;" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		 echo "<table class='table table-sm table-hover' style='width:75%;'><tr><th>Lisaandmed</th><th>Kokku</th></tr>";
		while($row = mysqli_fetch_assoc($result)) {
		 echo '
  <tr>
	<td>'.$row["Autorid"].'</td>
	<td>'.$row["C"].'</td>
  </tr> '; }
   echo "</table>";
	}
}
}
/*
//laenutus lugejad
elseif ($_POST['column'] == 'readers1' ) {	
	echo 'Laenutus- Lugejad';
}
//laenutus liik
elseif ($_POST['column'] == 'format' ) {
	echo 'Laenutus- Liik';
}
//laenutus keeled
elseif ($_POST['column'] == 'languages' ) {
	echo 'Laenutus- Keel';
}


	


}*/

 ?>

	</table>
</div>	
<div class="item4">
</div>
    </div>
    
</div>
</div>
</body>
</html>
