<?php
include_once("config.php");
$sql= "SELECT * FROM class" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
<title>Klassid</title>
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
<a href="class_add.php">Lisa</a> 
<a href="#">Trüki</a> 
<a href="#">Ekspordi</a> 
</div>
</div>
<div class="item2">
<div class= "menu">
		<ul style="list-style-type:none">
			<li> <a href="readers_data.php"> Lugejad</a> </li> 
			<li> <a href="class_data.php"> Klassid</a> </li>
			<li><a href="menu.php">Esilehele</a> </li>	  			
		</ul>
	</div> </div>

  <div class="item3">   
 <table class="tablemanager" id="table1">
	<thead>
	<tr>
		<th>Klass</th> 
		<th>Täht</th> 
		<th>Klassijuhataja</th>
		<th>Klassiruum</th> 
		<th>Märkused</th>
		<th> </th>
    </tr>
	</thead>
	<tbody>
	
<?php	

		while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['klass']."</td>";
        echo "<td>".$row['taht']."</td>";
		echo "<td>".$row['klassijuhataja']."</td>";
        echo "<td>".$row['klassiruum']."</td>";
        echo "<td>".$row['markused']."</td>";
        echo "<td><a href='class_edit.php?id=$row[id]' style='text-decoration: none'>Muuda</a> | 
		<a href='class_delete.php?id=$row[id]' style='text-decoration: none' class='delete'>Kustuta</a></td></tr>";
		
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

</script>	</div>

<div class="item4">

</div>
</div>

</body>
</html>