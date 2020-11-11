<?php
include_once("config.php");


$sql= "SELECT id, pealkiri, autor, aasta, liik, keel, valjaandja, 
kogus, riiul, marksona, markused FROM book";
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Raamatud</title>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" /> <!-- avab lehe seadme suurusega-->
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="js/jquery.min.js"></script> <!-- kustutamise teate jaoks-->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> ></script>

<style>
table { 
            font-family: arial, sans-serif; 
            border-collapse: collapse; 
            width: 50%; 
        } 
          
        td, 
        th { 
            border: 1px solid #dddddd; 
            text-align: left; 
            padding: 8px; 
        } 
          
        h1 { 
            color: green; 
        } 
</style>

</head>
 <h3> 
          perform a real time search and filter  
          on a HTML table 
        </h3> 
        <b>Search the table for Course, Fees or Type:  
          <input id="gfg" type="text" 
                 placeholder="Search here"> 
        </b> 
        <br> 
        <br> 
<body>
<div class="grid-container">
  <div class="item1">

<div class="search_menu">
<a href="book_add.php">Lisa uus raamat</a>
<!--<a href="readers_multible.php">Muuda </a>
<a href="#">Prindi</a>
<a href="#">Ekspordi andmed</a>-->
<!--<form method="post" action="export.php" align="center">  
<input type="submit" name="Ekspordi csv" value="Expordi" class="btn btn-success" />  
                </form>  -->
<br> <br>


</div>
</div>
<div class="item2">
<div class= "menu">
	
		<ul style="list-style-type:none">
			<li> <a href="book_data.php"> Raamatud</a> </li> 
			<li> <a href="textbook.php"> Õpikud </a></li>
			<li> <a href="periodicals.php">Perioodika</a></li>
			<li> <a href="audio.php">Audio-Video</a></li>	
			<li> <a href="workbook.php">Töövihikud</a></li>
			<li> <a href="meth_library.php">Metoodiline kirjandus</a></li> 
			<br>
			<li> <a href="menu.php">Esilehele</a></li>
			<li> <a href="library_fund.php">Tagasi</a></li>		
		</ul>

	</div>
	</div>
  <div class="item3">
<table id="example" class="display" style="width:100%">
<thead>
    <tr>
		<th>Pealkiri</th>  <!-- diltreerib pealkirja järgi kasvavalt või kahanevalt-->
		<th >Autor</th> 
		<th >Aasta</th>
		<th >Liik</th> 
		<th >Keel</th>
		<th>Väljaandja</th> 
		<th >Kogus</th> 
		<th>Riiul</th>
		<th >Märksõna</th> 
		<th >Märkused</th> 
		
		<th> </th>	
		<th> </th>			
    </tr>
	</thead>
	<tbody>

    <?php

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['pealkiri']."</td>";
		echo "<td>".$row['autor']."</td>";
		echo "<td>".$row['aasta']."</td>";
        echo "<td>".$row['liik']."</td>";
        echo "<td>".$row['keel']."</td>";
		echo "<td>".$row['valjaandja']."</td>";
		echo "<td>".$row['kogus']."</td>";
        echo "<td>".$row['riiul']."</td>";
        echo "<td>".$row['marksona']."</td>";
		echo "<td>".$row['markused']."</td>";		
        echo "<td><a href='book_edit.php?id=$row[id]' style='text-decoration: none'>Muuda</a> </td>";
		echo "<td> <a href='book_delete.php?id=$row[id]'style='text-decoration: none' class='delete' >Kustuta</a></td></tr>";
}
    ?>
</tbody>
    </table>
	
</div>

</div>	
<div class="item4">
<script> 
            $(document).ready(function() { 
                $("#gfg").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#geeks tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        </script> 

</div>
</body>
</html>