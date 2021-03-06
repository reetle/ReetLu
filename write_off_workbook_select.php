<?php
include_once("config.php");
//lehek[le nummerdus
$record_per_page = 50; //näitab 50 kirjet ühel lehel
$page = '';
if(isset($_GET["page"])){
 $page = $_GET["page"];}
else{
 $page = 1;}
$start_from = ($page-1)*$record_per_page;

$sql= "SELECT * FROM workbook order by pealkiri LIMIT $start_from, $record_per_page "; 
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

?>

<!DOCTYPE html>
<html>
<head>
<title>Töövihik</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
 <meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" /> <!-- avab lehe seadme suurusega-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
 <div class="container-fluid">         
<div class="row" id="head">
<div class="col-lg"  id="head">
 <?php
include_once("header.php");
?>      
    </div>    
 </div> 
<div class="row " id="menyy">
    <div class="col-lg" >
        
	<form action=" " method="POST" class="vorm" >
		<select name="column">
            <option value="id">Inventari nr</option>
			<option value="pealkiri">Pealkiri</option>
            <option value="klass">Klass</option>
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
            <option value="include"></option>
			<option value="include">Sisaldab</option>
			<option value="starts">Algab</option>
			<option value="ends">Lõpeb</option>
			<option value="exactly">Täpselt</option> <!-- ei toimi-->
		</select>
 <?php
/*viimane otsing jääb otsing aknasse*/
			$search = (isset($_POST['search'])) ? htmlentities($_POST['search']) : ''; ?>
			<input type="text" name="search" value="<?= $search ?>" required>
			<input type ="submit" value="Otsi"> 	
		</form>
 		
</div> </div>

 <!-- Tabel-->
<div class="col-lg "  id="tabel">
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table id="editable_table" class="table table-sm table-hover  ">
    <thead>
		<tr>	
 <!-- filtreerib pealkirja järgi kasvavalt või kahanevalt, &#8693; lisab nooled -->	
		<th onclick="sortTable(0)">#</th>  
		<th onclick="sortTable(1)">Pealkiri &#8693;</th> 
        <th onclick="sortTable(2)">Klass &#8693;</th>             
		<th onclick="sortTable(3)">Autor &#8693;</th> 
		<th onclick="sortTable(4)">Aasta &#8693;</th>
		<th onclick="sortTable(5)">Liik &#8693;</th> 
		<th onclick="sortTable(6)">Keel &#8693;</th>
		<th onclick="sortTable(7)">Väljaandja &#8693;</th> 
		<th onclick="sortTable(8)">Kogus &#8693;</th> 
		<th onclick="sortTable(9)">Riiul &#8693;</th>
		<th onclick="sortTable(10)">Märksõna &#8693;</th> 
		<th onclick="sortTable(11)">Märkused &#8693;</th>	
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
$sql= "SELECT * FROM workbook where $column like '%$search%' " ;}
	
elseif($column1 == 'starts'){
$sql= "SELECT * FROM workbook where $column like ' " . $search . "%' " ;} // esitähe järgi 
	
elseif($column1 == 'ends'){
$sql= "SELECT * FROM workbook where $column like '%" . $search . "' " ;} //viimase tähe järgi

elseif($column1 == 'exactly'){
$sql= "SELECT * FROM workbook where $column like ' " . $search . " ' " ;} //täpselt  ei toimi 
}

$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

  while($row = mysqli_fetch_array($result)) { 	
  echo '
  <tr>
	<td >'.$row["id"].'</td> 
	<td>'.$row["pealkiri"].'</td> 
    <td>'.$row["klass"].'</td>     
	<td>'.$row["autor"].'</td>
	<td>'.$row["aasta"].'</td>
	<td>'.$row["liik"].'</td>
	<td>'.$row["keel"].'</td>
	<td>'.$row["valjaandja"].'</td>
	<td>'.$row["kogus"].'</td>
	<td>'.$row["riiul"].'</td>
	<td>'.$row["marksona"].'</td>
	<td>'.$row["markused"].'</td>	
	<td><a href="write_off_workbook.php?id='.$row["id"].' "class="btn btn-sm">Kanna Maha</i></a>
  </tr> '; }
 ?>
	</tbody>
	</table>
     
    </div>   

 </div>	
 
    </div> 
    <div class="row justify-content-end" id="jalus">    
 <div class="col-lg-10" id="jalus">
 <div id="pagination">

<?php
	/*tabel kuvab 25 esimest kirjet ja jagab ülejäänud tabeli kehekülge https://www.webslesson.info/2016/05/how-to-make-simple-pagination-using-php-mysql.html*/
	$page_query = "SELECT *
	FROM workbook ORDER BY 'pealkiri'";
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
     echo "<a href='workbook_data.php?page=1'> Algusesse </a>";
     echo "<a href='workbook_data.php?page=".($page - 1)."'> << </a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='workbook_data.php?page=".$i."'>" .$i. "</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='workbook_data.php?page=".($page + 1)."'> >> </a>";
     echo "<a href='workbook_data.php?page=".$total_pages."'> Lõppu </a>";
    }
  ?> 
 </div>       
        
        
        </div>
</div> 
</body>
</html>


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