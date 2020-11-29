<?php
include_once("config.php");

$sql= "SELECT * FROM borrow_book "; 
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Laenutamine</title>
</head>
<body> 
<div class="grid-container">
  <div class="item1"> 
<button onclick="window.location.href='select_media.php';">Laenuta</button> 
   <form action=" " method="POST" >
		 Meedia tüüp: 
		 <select name="column">
			<option value="all">Kõik</option>
			<option value="book">Raamatud</option>
			<option value="textbook">Õpikud</option>
			<option value="periodicals">Perioodika</option>
			<option value="audio_video">Audio-video</option>
			<option value="workbook">Töövihikud</option>
			<option value="met.library">Metoodiline kirjandus</option> 
		</select> <br> <br>
			Pealkiri: <input type="text" name="submit"><br> <br>
			Inventari nr: <input type="text" name="submit"> <br> <br>
			
	 Lugeja klass: 		
	<select name="column1">
			<option value="all">Kõik</option>
			<option value="one">1</option>
			<option value="two">2</option>
			<option value="three">3</option>
			<option value="four">4</option>
			<option value="five">5</option>
			<option value="six">6</option> 
			<option value="seven">7</option>
			<option value="eight">8</option>
			<option value="nine">9</option>
			<option value="ten">10</option>
			<option value="eleven">11</option> 
			<option value="twelve">12</option> 
		</select> <br> <br>
			Lugeja nimi: <input type="text" name="submit"> <br><br>
			<input type="radio" id="deptors"> 
			<label for="deptors">Ainult võlglased: </label><br>
			<input type ="submit" value="Filtreeri"> 	 <br><br>			
		</form>
 
</div> 

<div class="item2"> 
<?php
include_once("doings.php");
?>
</div>
 <div class="item3"> 
  <div class="tabel">  
    <table id="editable_table" >
    <thead>
		<tr>	
 <!-- filtreerib pealkirja järgi kasvavalt või kahanevalt, &#8693; lisab nooled -->	
		<th onclick="sortTable(0)" style="visibility:hidden;">ID</th>  
		<th onclick="sortTable(1)">Lugeja&#8693;</th> 
		<th onclick="sortTable(2)">Meedia_liik &#8693;</th> 
		<th onclick="sortTable(3)">Pealkiri &#8693;</th>
		<th onclick="sortTable(4)">Autor &#8693;</th> 
		<th onclick="sortTable(5)">Kogus &#8693;</th>
		<th onclick="sortTable(6)"> Laenutatud &#8693;</th> 
		<th onclick="sortTable(6)"> Tagastatud &#8693;</th> 
			<th> </th>

		</tr>
	<thead>
	<tbody>
<?php

  while($row = mysqli_fetch_array($result)) { 	
  echo '
  <tr>
	<td style="visibility:hidden;">'.$row["id"].'</td> 
	<td>'.$row["lugeja"].'</td> 
	<td>'.$row["meedia_liik"].'</td>
	<td>'.$row["pealkiri"].'</td>
	<td>'.$row["autor"].'</td>
	<td>'.$row["kogus"].'</td>
	<td>'.$row["algus_kp"].'</td>
	<td>'.$row["tagastus_kp"].'</td>
	<td><a href="borrow_book_return.php?id='.$row["id"].'">Tagasta</a></td>
	
  </tr> '; }
 ?>
	</tbody>
	</table>


 </div> 

<div class="item4"> </div>

</div>
</body>
</html>