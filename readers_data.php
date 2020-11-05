<?php

include_once("config.php");
$record_per_page = 12;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

$sql= "SELECT * FROM readers  LIMIT $start_from, $record_per_page" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));



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
	<?php
	/*tabel kuvab 10 esimest kirjet ja jagab ülejäänud tabeli kehekülge*/
	$page_query = "SELECT * FROM readers ";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 6)
    {
     $start_loop = $total_pages - 6;
    }
    $end_loop = $start_loop + 9;
    if($page > 1)
    {
     echo "<a href='readers_data.php?page=1'>Tagasi</a>";
     echo "<a href='readers_data.php?page=".($page - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='readers_data.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='readers_data.php?page=".($page + 1)."'>>></a>";
     echo "<a href='readers_data.php?page=".$total_pages."'>Edasi</a>";
    }
  ?> 
</div>

<div class="item4">

<div id="back_button">
<a href="menu.php">Tagasi esilehele</a> <br>
<a href="readers.php">Tagasi eelmisele lehele</a>
</div>
</div>
</body>
</html>