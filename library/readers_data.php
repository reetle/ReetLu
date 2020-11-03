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
<a href="readers_add.php">lisa</a><br/><br/>
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
</body>
</html>

<div id="back_button">
<a href="menu.php">Tagasi esilehele</a>
</div>
</body>
</html>