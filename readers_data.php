<?php
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM readers ");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Lugejad</title>
</head>
<body>
<div class="grid-container">
  <div class="item1">

<div class="search_menu">
<a href="readers_add.php">lisa</a><br/><br/>
</div>
</div>
<div class="item2">
<div class= "menu">
		<ul style="list-style-type:none">
			<li> <a href="readers_data.php"> Lugejad</a> </li> 
			<li> <a href="class_data.php"> Klassid</a> </li>  			
		</ul>
	</div> </div>
  <div class="item3"> 
    <table id="table1">
    <tr>
		<th>Klass</th> 
		<th>Perekonnanimi</th> 
		<th>Eesnimi</th>
		<th>Aadress</th> 
		<th>Linn</th>
		<th>Maakond</th> 
		<th>Postiindeks</th> 
		<th>Telefon</th>
		<th>Markused</th> 
		<th> </th>		
    </tr>
    <?php
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['klass']."</td>";
        echo "<td>".$row['perekonnanimi']."</td>";
		echo "<td>".$row['eesnimi']."</td>";
        echo "<td>".$row['aadress']."</td>";
        echo "<td>".$row['linn']."</td>";
		echo "<td>".$row['maakond']."</td>";
		echo "<td>".$row['postiindeks']."</td>";
        echo "<td>".$row['telefon']."</td>";
        echo "<td>".$row['markused']."</td>";
        echo "<td><a href='readers_edit.php?id=$row[id]'>Edit</a> | 
		<a href='readers_delete.php?id=$row[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</div>

<div class="item4">

<div id="back_button">
<a href="menu.php">Tagasi esilehele</a> <br>
<a href="readers.php">Tagasi eelmisele lehele</a>
</div>
</div>
</body>
</html>