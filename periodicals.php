<?php
include_once("config.php");
$sql= "SELECT id, pealkiri, klass, autor, ilmumisaasta, liik, keel, valjaandja,
 kogus, riiul, marksona FROM library_fund where meedia_liik like'pe'" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

?>
<!DOCTYPE html>
<html>
<head>
<title>Perioodika</title>
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
<a href="book_add.php">Lisa</a>
<a href="#">Muuda </a>
<a href="#">Prindi</a>
<a href="#">Ekspordi andmed</a>
<br>
</div>
</div>
<div class="item2">
	<div class= "menu">
		<ul style="list-style-type:none">
			<li> <a href="book_data.php"> Raamatud</a> </li>  
			<li> <a href="textbook.php"> Õpikud </a></li> 
		<!--	<li> <a href="periodicals.php">Perioodika</a></li> -->
			<li> <a href="audio.php">Audio-Video</a></li>	
		 <li> <a href="workbook.php">Töövihikud</a></li> 
			<li> <a href="meth_library.php">Metoodiline kirjandus</a></li>	<br>
			<li><a href="menu.php">Esilehele</a> </li>			
		</ul>
	</div> 
	</div> 
<div class="item3"> 
    <table class="tablemanager" id="table1">
	<thead>
    <tr>
		<th>Pealkiri</th> 
		<th>Aasta</th>
		<th>Liik</th> 
		<th>Keel</th>
		<th>Väljaandja</th> 
		<th>Kogus</th> 
		<th>Riiul</th>
		<th>Märksõna</th> 
		<th class="disableFilterBy"> </th>			
    </tr>
	</thead>
	<tbody>	
<?php
   while($row = mysqli_fetch_array($result)) {

        echo "<tr>";
        echo "<td>".$row['pealkiri']."</td>";
		echo "<td>".$row['ilmumisaasta']."</td>";
        echo "<td>".$row['liik']."</td>";
        echo "<td>".$row['keel']."</td>";
		echo "<td>".$row['valjaandja']."</td>";
		echo "<td>".$row['kogus']."</td>";
        echo "<td>".$row['riiul']."</td>";
        echo "<td>".$row['marksona']."</td>";		
        echo "<td><a href='book_edit.php?id=$row[id]' style='text-decoration: none' >Muuda</a> | 
		<a href='book_delete.php?id=$row[id]' style='text-decoration: none' class='delete'>Kustuta</a></td></tr>";
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