<?php
include_once("config.php");
$sql= "SELECT id, pealkiri, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksona FROM library_fund where meedia_liik like'tv'" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

?>
<!DOCTYPE html>
<html>
<head>
<title>Töövihikud</title>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" /> <!-- avab lehe seadme suurusega-->
<link rel="stylesheet" href="styles.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/tableManager.js"></script>
<style type="text/css">
		/*sorteerimine*/
		.tablemanager th.sorterHeader {
			cursor: pointer;
		}
		.tablemanager th.sorterHeader:after {
			content: " \f0dc";
			font-family: "FontAwesome";
			font-size:10px;
			
		}
		/*Style sort desc*/
		.tablemanager th.sortingDesc:after {
			content: " \f0dd";
			font-family: "FontAwesome";		
		}
		/*Style sort asc*/
		.tablemanager th.sortingAsc:after {
			content: " \f0de";
			font-family: "FontAwesome";
		}
		/*Style disabled*/
		.tablemanager th.disableSort {
		}
		#for_numrows {
			padding: 10px;
			float: left;
		}
		#for_filter_by {
			padding: 10px;
			float: right;
		}
		#pagesControllers {
			display: block;
			text-align: left;
			margin-top:2px;
		}
</style>
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
		<!--	<li> <a href="textbook.php"> Õpikud </a></li> -->
			<li> <a href="periodicals.php">Perioodika</a></li>
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
		<th>pealkiri</th> 
		<th>autor</th> 
		<th>ilmumise aasta</th>
		<th>liik</th> 
		<th>keel</th>
		<th>väljaandja</th> 
		<th>kogus</th> 
		<th>riiul</th>
		<th>Marksõna</th> 
		<th>  </th>		
    </tr>
	</thead>
	<tbody>	
<?php
   while($row = mysqli_fetch_array($result)) {

        echo "<tr>";
        echo "<td>".$row['pealkiri']."</td>";
        echo "<td>".$row['autor']."</td>";
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