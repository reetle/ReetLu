<?php
include_once("config.php");
//lehek[le nummerdus
$record_per_page = 25; //näitab 25 kirjet ühel lehel
$page = '';
if(isset($_GET["page"])){
 $page = $_GET["page"];}
else{
 $page = 1;}
$start_from = ($page-1)*$record_per_page;

$sql= "SELECT * FROM book order by pealkiri LIMIT $start_from, $record_per_page "; 
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

?>

<!DOCTYPE html>
<html>
<head>
<title>Raamatud</title>
<link rel="stylesheet" href="styles.css" type="text/css"/>
   <!--laenutamise ja kustutamise ikoon-->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" /> <!-- avab lehe seadme suurusega-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="js/jquery.tabledit.min.js"></script>

</head>
<body>

<div class="grid-container">
<!--otsimise ja filtreerimise menüü-->
<div class="item1">
	<div class="search_menu">
		<button onclick="window.location.href='book_add.php';">Lisa uus raamat</button>
		<button type="submit" form="form2" name="export" class="export" >Ekspordi CSV</button>
		<button onclick="window.location.href='book_data.php';">Tühista filtreering</button>

<br><br>
<!--andmete eksport-->
 <form method="post" action="book_export.php" id="form2">  

                </form>  

	<!--filtreerimine tabeli pealkirjade järgi-->
	<form action=" book_data.php" method="POST" class="vorm" >
		<select name="column">
			<option value="pealkiri">Pealkiri</option>
			<option value="autor">Autor</option>
			<option value="aasta">Aasta</option>
			<option value="liik">Liik</option>
			<option value="keel">Keel</option>
			<option value="valjaandja">Väljaandja</option>
			<option value="kogus">Kogus</option>
			<option value="riiul">Riiul</option>
			<option value="marksona">Märksõna</option>
			<option value="markused">Märkused</option>
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
 		
</div> </div>
<div class="item2">
 <!--raamatute menüü-->
<?php
include_once("library_fund.php");
?>
</div>
 <!-- Tabel-->
 <div class="item3"> 
 <div class="table-responsive">  
    <table id="editable_table" class="table table-sm table-hover ">
    <thead>
		<tr>	
 <!-- filtreerib pealkirja järgi kasvavalt või kahanevalt, &#8693; lisab nooled -->	
		<th onclick="sortTable(0)" style="visibility:hidden;">ID</th>  
		<th onclick="sortTable(1)">Pealkiri &#8693;</th> 
		<th onclick="sortTable(2)">Autor &#8693;</th> 
		<th onclick="sortTable(3)">Aasta &#8693;</th>
		<th onclick="sortTable(4)">Liik &#8693;</th> 
		<th onclick="sortTable(5)">Keel &#8693;</th>
		<th onclick="sortTable(6)">Väljaandja &#8693;</th> 
		<th onclick="sortTable(7)">Kogus &#8693;</th> 
		<th onclick="sortTable(8)">Riiul &#8693;</th>
		<th onclick="sortTable(9)">Märksõna &#8693;</th> 
		<th onclick="sortTable(10)">Märkused &#8693;</th>	
		<th></th>
		<th></th>	
	
				
		</tr>
	<thead>
	<tbody>
<?php
if ((isset($_POST['search'])) and (isset($_POST['column'])) and (isset($_POST['column1'])) ){
	$search=$_POST['search'];
	$column=$_POST['column'];
	$column1=$_POST['column1'];
if($column1 == 'include'){
$sql= "SELECT * FROM book where $column like '%$search%' " ;}
	
elseif($column1 == 'starts'){
$sql= "SELECT * FROM book where $column like ' " . $search . "%' " ;} // esitähe järgi 
	
elseif($column1 == 'ends'){
$sql= "SELECT * FROM book where $column like '%" . $search . "' " ;} //viimase tähe järgi

elseif($column1 == 'exactly'){
$sql= "SELECT * FROM book where $column like ' " . $search . " ' " ;} //täpselt  ei toimi 
}

$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

  while($row = mysqli_fetch_array($result)) { 	
  echo '
  <tr>
	<td style="visibility:hidden;">'.$row["id"].'</td> 
	<td>'.$row["pealkiri"].'</td> 
	<td>'.$row["autor"].'</td>
	<td>'.$row["aasta"].'</td>
	<td>'.$row["liik"].'</td>
	<td>'.$row["keel"].'</td>
	<td>'.$row["valjaandja"].'</td>
	<td>'.$row["kogus"].'</td>
	<td>'.$row["riiul"].'</td>
	<td>'.$row["marksona"].'</td>
	<td>'.$row["markused"].'</td>	
	<td><a href="borrow_book.php?id='.$row["id"].'">Laenuta</a></td>
	<td><a href="write_off_book.php?id='.$row["id"].' ">Kanna Maha</i></a></td>
  </tr> '; }
 ?>
	</tbody>
	</table>
<div id="pagination">
<style>
    i{
     font-size:16px; 
        
    }
</style>
<?php
	/*tabel kuvab 25 esimest kirjet ja jagab ülejäänud tabeli kehekülge https://www.webslesson.info/2016/05/how-to-make-simple-pagination-using-php-mysql.html*/
	$page_query = "SELECT *
	FROM book ORDER BY 'pealkiri'";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5) /*mitu lehekülge näitab korraga*/
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a href='book_data.php?page=1'> Algusesse </a>";
     echo "<a href='book_data.php?page=".($page - 1)."'> << </a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='book_data.php?page=".$i."'>" .$i. "</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='book_data.php?page=".($page + 1)."'> >> </a>";
     echo "<a href='book_data.php?page=".$total_pages."'> Lõppu </a>";
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
      url:'book_action.php',
		buttons: {
        edit: {
            html: ' <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" style="color:green"/>Muuda</svg>',
            action: 'edit'
        }
    },
	
		columns:{
       identifier:[0, "id"],
       editable:[[1, 'pealkiri'],  [2, 'autor'], [3, 'aasta'],
	   [4, 'liik'], [5, 'keel'], [6, 'valjaandja'], [7, 'kogus'],
	   [8, 'riiul'], [9, 'marksona'], [10, 'markused']
	   
	   
	   
	   ]
      },

 restoreButton:false,
 deleteButton: false, //peidab delete nupu ära
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