<?php
include_once("config.php");
//lehek[le nummerdus
$record_per_page = 10; //näitab 25 kirjet ühel lehel
$page = '';
if(isset($_GET["page"])){
 $page = $_GET["page"];}
else{
 $page = 1;}
$start_from = ($page-1)*$record_per_page;

$sql= "SELECT * FROM class LIMIT $start_from, $record_per_page "; 
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

?>
<!DOCTYPE html>
<html>
<head>
<title>Klassid</title>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" /> <!-- avab lehe seadme suurusega-->
<link rel="stylesheet" href="styles.css" type="text/css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />       
<script src="js/jquery.tabledit.min.js"></script>
<script src="js/pagination.min.js"></script>

</head>
<body>
<div class="grid-container">
  <div class="item1">

<div class="search_menu">
	<button onclick="window.location.href='class_add.php';">Lisa uus</button>
		<button onclick="#">Prindi</button>
		<button type="submit" form="form2" name="export" class="export" >Ekspordi CSV</button>
<br><br>
<!--andmete eksport-->
 <form method="post" action="class_export.php" id="form2"> </form>  
				
<!--filtreerimine tabeli pealkirjade järgi-->
	<form action=" class_data.php" method="POST" >
		<select name="column">
			<option value="klass">klass</option>
			<option value="taht">taht</option>
			<option value="klassijuhataja">klassijuhataja</option>
			<option value="klassiruum">klassiruum</option>
			<option value="markused">markused</option>
		</select> 
<!--filtreerimine esimese tähe, jne järgi-->
		<select name="column1">
			<option value="include">Sisaldab</option>
			<option value="starts">Algab</option>
			<option value="ends">Lõpeb</option>
			<option value="exactly">Täpselt</option> <!-- ei toimi-->
		</select>
 <?php
/*viimane otsing jääb otsing aknasse*/
			$search = (isset($_POST['search'])) ? htmlentities($_POST['search']) : ''; ?>
			<input type="text" name="search" value="<?= $search ?>" required>
			<input type ="submit" value="Filtreeri"> 	
		</form>
 <!--filtreeringu tühistamiseks laeb lehe uuesti-->		
		<button onclick="window.location.href='class_data.php';">Tühista filtreering</button>
</div> </div>
<div class="item2">
 <!--raamatute menüü-->
<?php
include_once("readers.php");
?>
</div>
 <!-- Tabel-->
 <div class="item3"> 
  <div class="tabel">  
    <table id="editable_table" >
    <thead>
		<tr>	
 <!-- filtreerib pealkirja järgi kasvavalt või kahanevalt, &#8693; lisab nooled -->	
		<th onclick="sortTable(0)" style="visibility:hidden;">ID</th>  
		<th onclick="sortTable(1)">Klass &#8693;</th> 
		<th onclick="sortTable(2)">Täht &#8693;</th> 
		<th onclick="sortTable(3)">Klassijuhataja &#8693;</th>
		<th onclick="sortTable(4)">Klassiruum &#8693;</th> 
		<th onclick="sortTable(5)">Märkused &#8693;</th>			
		</tr>
	<thead>
	<tbody>
<?php
if ((isset($_POST['search'])) and (isset($_POST['column'])) and (isset($_POST['column1'])) ){
	$search=$_POST['search'];
	$column=$_POST['column'];
	$column1=$_POST['column1'];
if($column1 == 'include'){
$sql= "SELECT * FROM class where $column like '%$search%' " ;}
	
elseif($column1 == 'starts'){
$sql= "SELECT * FROM class where $column like ' " . $search . "%' " ;} // esitähe järgi 
	
elseif($column1 == 'ends'){
$sql= "SELECT * FROM class where $column like '%" . $search . "' " ;} //viimase tähe järgi

elseif($column1 == 'exactly'){
$sql= "SELECT * FROM class where $column like ' " . $search . " ' " ;} //täpselt  ei toimi 
}

$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

  while($row = mysqli_fetch_array($result)) { 	
  echo '
  <tr>
	<td style="visibility:hidden;">'.$row["id"].'</td> 
	<td>'.$row["klass"].'</td> 
	<td>'.$row["taht"].'</td>
	<td>'.$row["klassijuhataja"].'</td>
	<td>'.$row["klassiruum"].'</td>
	<td>'.$row["markused"].'</td>
  </tr> '; }
 ?>
	</tbody>
	</table>
<div id="pagination">
<style>

</style>
<?php
	/*tabel kuvab 25 esimest kirjet ja jagab ülejäänud tabeli kehekülge https://www.webslesson.info/2016/05/how-to-make-simple-pagination-using-php-mysql.html*/
	$page_query = "SELECT *
	FROM class ";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 1) /*mitu lehekülge näitab korraga*/
    {
     $start_loop = $total_pages - 1;
    }
    $end_loop = $start_loop + 1;
    if($page > 1)
    {
     echo "<a href='class_data.php?page=1'> Algusesse </a>";
     echo "<a href='class_data.php?page=".($page - 1)."'> << </a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='class_data.php?page=".$i."'>" .$i. "</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='class_data.php?page=".($page + 1)."'> >> </a>";
     echo "<a href='class_data.php?page=".$total_pages."'> Lõppu </a>";
    }
  ?>  
 </div>
</div>	
</div>  
</body>
</html>

<script>  //tabelis lives muutmine
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'class_action.php',

	
		columns:{
       identifier:[0, "id"],
       editable:[[1, 'klass'],  [2, 'number'], [3, 'klassijuhataja'],
	   [4, 'klassiruum'], [5, 'markused'] 
	   
	   
	   ]
      },
   restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>
 <!-- tabelite headerite sorteerimiseks https://www.w3schools.com/howto/howto_js_sort_table.asp-->
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("editable_table");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n]; 
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<script>
$('#editable_table').pagination({
    dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 40],
    pageSize: 5,
    showGoInput: true,
    showGoButton: true,
    callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        dataContainer.html(html);
    }
})
</script>