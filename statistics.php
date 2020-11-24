<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Statistika</title>
</head>
<body>
<div class="grid-container">
  <div class="item1">
  <form action=" " method="POST" >
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
<div class="tabel">  
    <table id="editable_table" >

 <!--  <tr>
   <th>Klass</th>
   <th>Lugejad</th>
   <tr> -->
<?php
if (isset($_POST['column'])){
$column=$_POST['column'];

/*
switch($column){
    case 'fond':
        echo 'raamatukogu fond';
    break;
    case 'readers':
       echo 'Lugejad';
    break;
    case 'data':
        echo 'Lisaandmed';
    break;
    defaut:
        echo 'Ei tööta';
}}
*/
if ($_POST['column'] == 'fond') {
	echo 'raamatukogu fond';
}	
elseif ($_POST['column']== 'readers' ) {	
	echo 'Lugejad';
}
elseif ($_POST['column'] == 'data' ) {	
	echo 'Lisaandmed';
}
elseif ($_POST['column'] == 'readers1' ) {	
	echo 'Laenutus- Lugejad';
}
elseif ($_POST['column'] == 'format' ) {
	echo 'Laenutus- Liik';
}
elseif ($_POST['column'] == 'languages' ) {
	echo 'Laenutus- Keel';
}

}

 ?>

	</table>
</div>	
<div class="item4">
</div>
</div>
</div>
</body>
</html>
