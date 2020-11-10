<?php
include_once("config.php");
$sql= "SELECT * FROM readers" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
<title>Lugejate andmed</title>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" /> <!-- avab lehe seadme suurusega-->
<link rel="stylesheet" href="styles.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/tableManager.js"></script>
</head>
<body>
<div class="grid-container">
  <div class="item1">
  
<div class="search_menu">
<a href="readers_add.php">Lisa uus lugeja </a>
<a href="readers_multible.php">Muuda </a>
<a href="#">Prindi</a>
<a href="#">Ekspordi andmed</a>
<br>
</div>
</div>
<div class="item2">
<div class= "menu">
		<ul style="list-style-type:none">
			<li> <a href="readers_data.php"> Lugejad</a> </li> 
			<li> <a href="class_data.php"> Klassid</a> </li> <br>
			<li><a href="menu.php">Esilehele</a> </li>	
		</ul>
	</div> </div>
  <div class="item3"> 
  
<table class="tablemanager" id="table1">
<thead>
    <tr>
		<th > Klass</th> 		
		<th >Perekonnanimi</th> 
		<th >Eesnimi</th>
		<th >Aadress</th> 
		<th >Linn</th>
		<th >Maakond</th> 
		<th >Postiindeks</th> 
		<th >Telefon</th>
		<th >Märkused</th> 
		<th class="disableFilterBy"> </th>		
    </tr>
	</thead>
	<tbody>		
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
        echo "<td><a href='readers_edit.php?id=$row[id]' style='text-decoration: none' >Muuda</a> | 
		<a href='readers_delete.php?id=$row[id]' style='text-decoration: none' class='delete'> Kustuta</a></td></tr>";
    }
    ?>
		</tbody>
    </table>

<script>
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Oled sa kindel et soovid lugeja kustutada')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>

<script>
$('.tablemanager').tablemanager({
			firstSort: [[3,0],[2,0],[0,'asc']],
			disable: ["last"],
			appendFilterby: true,
			debug: true,
			vocabulary: {
    voc_filter_by: 'Filtrer',
    voc_type_here_filter: 'Filtreeri',
    voc_show_rows: 'Näita ridu'
  },
			pagination: true,
			showrows: [20,50,100],
			disableFilterBy: [0]
		});

</script>


</div>

<div class="item4">




</div>

</body>
</html>