<?php
include_once("config.php");
$sql= "SELECT * FROM readers" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
$count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Muuda lugejate andmed</title>
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
<input type='submit' value='Muuda' name='update'><br><br>
</div>
</div>
<div class="item2">
<div class= "menu">
		<ul style="list-style-type:none">
			<li> <a href="readers_data.php"> Lugejad</a> </li> 
			<li> <a href="class_data.php"> Klassid</a> </li> <br>
			<li><a href="menu.php">Esilehele</a> </li>	
			<li><a href="readers_data.php">Tagasi</a> </li>	
 			
		</ul>
	</div> </div>
  <div class="item3"> 
  <!--  <table id="table1"> -->
<table class="tablemanager" id="table1">
<thead>
    <tr>
		<th class="disableSort"><input type="checkbox" id="checkAll" class="disableSort"> </th>
		<th  >Klass</th> 		
		<th >Perekonnanimi</th> 
		<th >Eesnimi</th>
		<th >Aadress</th> 
		<th >Linn</th>
		<th >Maakond</th> 
		<th >Postiindeks</th> 
		<th >Telefon</th>
		<th >Markused</th> 
		<th class="disableFilterBy"> </th>		
    </tr>
	<thead>
	<tbody>	
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
	
 
        echo "<tr>";
		echo '<td><center><input type="checkbox" name="box" value="?id=$row[id]"></center></td>';
        echo "<td>".$row['klass']."</td>";
        echo "<td>".$row['perekonnanimi']."</td>";
		echo "<td>".$row['eesnimi']."</td>";
        echo "<td>".$row['aadress']."</td>";
        echo "<td>".$row['linn']."</td>";
		echo "<td>".$row['maakond']."</td>";
		echo "<td>".$row['postiindeks']."</td>";
        echo "<td>".$row['telefon']."</td>";
        echo "<td>".$row['markused']."</td>";
        echo "<td><a href='readers_edit.php?id=$row[id]'style='text-decoration: none' >Muuda</a> | 
		<a href='readers_delete.php?id=$row[id]'style='text-decoration: none' class='delete' >Kustuta</a></td></tr>";
    }
    ?>
		</tbody>
    </table>
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
			disableFilterBy: [1]
		});

</script>
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
$(document).ready(function(){
//checkime kõik boxid
  $('#checkAll').change(function(){
    if($(this).is(':checked')){
      $('input[name="box"]').prop('checked',true);
    }else{
      $('input[name="box"]').each(function(){
         $(this).prop('checked',false);
      });
    }
  });

  $('input[name="box"]').click(function(){
    var total_checkboxes = $('input[name="box"]').length;
    var total_checkboxes_checked = $('input[name="box"]:checked').length;

    if(total_checkboxes_checked == total_checkboxes){
       $('#checkAll').prop('checked',true);
    }else{
       $('#checkAll').prop('checked',false);
    }
  });
});
</script>

	
</div>
<script>
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "readers_delete.php";
document.frmUser.submit();
}
}
</script>
<div class="item4">

</div>

</body>
</html>