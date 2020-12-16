<?php
include_once("config.php");
$record_per_page = 25; //näitab 25 kirjet ühel lehel
$page = '';
if(isset($_GET["page"])){
 $page = $_GET["page"];}
else{
 $page = 1;}
$start_from = ($page-1)*$record_per_page;

$sql= "SELECT * FROM borrow_book LIMIT $start_from, $record_per_page "; 
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Laenutamine</title>
</head>
<body> 
<div class="container-fluid">         
<div class="row" id="head">
<div class="col-lg" id="head">
 <?php
include_once("header.php");
?>      
    </div>    </div>

       
<div class="row justify-content-end">
    <div class="col-lg-2" >
    <div class= "menu">
<?php
include_once("doings.php");
?>
	</div>     
    </div>
       
 <div class="col-lg-10" style="margin-bottom:33rem; "id="filter">
  <div class="search_menu">
      <button onclick="window.location.href='select_media_borrow.php';">Laenuta</button> 
      <button onclick="window.location.href='borrow.php';">Tühista filtreerimine</button> 
      <button onclick="window.location.href='borrow_book_return_nr.php';">Tagasta inventari nr alusel</button> <br> <br>

	
   <form action="borrow.php" method="POST" class="vorm1" >
		 <select name="column">
		 <option value="lugeja">Lugejad</option>
		 <option value="meedia_liik">Meedia liik</option>			
			<option value="pealkiri">Pealkiri</option>
			<option value="autor">Autor</option>
		</select>	

       <input type="text" name="search">	 

        <input type="radio" name="select" value="all" checked="checked"> <label for="all">Näita kõik</label> 
        <input type="radio" name="select" value="debt"> <label for="debt">Näita ainult võlglaseid</label>
     
       <input type ="submit" value="Näita"> 
      </form>
		

</div> </div>

 <div class="col-lg-10 " style="margin-top:-33rem" id="tabel">
  
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table id="editable_table" class="table table-sm table-hover ">
    <thead>
		<tr>	
 <!-- filtreerib pealkirja järgi kasvavalt või kahanevalt, &#8693; lisab nooled -->	
		<th onclick="sortTable(0)" style="visibility:hidden;">ID</th>  
		<th onclick="sortTable(1)">	Lugeja&#8693;</th> 
		<th onclick="sortTable(2)">	Meedia_liik &#8693;</th> 
		<th onclick="sortTable(3)">	Pealkiri &#8693;</th>
		<th onclick="sortTable(4)">	Autor &#8693;</th> 
		<th onclick="sortTable(5)">	Kogus &#8693;</th>
		<th onclick="sortTable(6)"> Laenutatud &#8693;</th> 
		<th onclick="sortTable(7)"> Tagastatud &#8693;</th> 
			<th> </th>

		</tr>
	<thead>
	<tbody>

<?php

        
if ((isset($_POST['search'])) and (isset($_POST['column'])) and (isset($_POST['select']))){
	$search=$_POST['search'];
	$column=$_POST['column'];
    $select=$_POST['select'];


    
    if ($select == 'all') {    
        $sql= "SELECT * FROM borrow_book where $column like '%$search%' " ;	
    }

    elseif ($select == 'debt') {    
        $sql= "SELECT * FROM borrow_book where tagastus_kp IS NULL and  $column like '%$search%' " ; }}
    
   else{
       $sql= "SELECT * FROM borrow_book";
   } 

$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
  while($row = mysqli_fetch_array($result)) { 	
  echo '
  <tr>
	<td style="visibility:hidden;">'.$row["id"].'</td> 
	<td>'.$row["lugeja"].'</td> 
	<td>'.$row["meedia_liik"].'</td>
	<td>'.$row["pealkiri"].'</td>
	<td>'.$row["autor"].'</td>
	<td>'.$row["kogus"].'</td>
	<td>'.$row["algus_kp"].'</td>
	<td>'.$row["tagastus_kp"].'</td>
	<td><a href="borrow_book_return.php?id='.$row["id"].'">Tagasta</a></td>
	
  </tr> '; 
}
 ?>
 
	</tbody>
	</table>
</div>  </div>  </div>  
<div class="row justify-content-end" id="jalus">    
 <div class="col-lg-10" >
<div id="pagination">
<style>
.column {
  float: left;
  width: 25%;
  margin-left:125px;
  font-size:12px;
}

</style>
<?php
	/*tabel kuvab 25 esimest kirjet ja jagab ülejäänud tabeli kehekülge https://www.webslesson.info/2016/05/how-to-make-simple-pagination-using-php-mysql.html*/
	$page_query = "SELECT *
	FROM borrow_book";
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
     echo "<a href='borrow.php?page=1'> Algusesse </a>";
     echo "<a href='borrow_book.php?page=".($page - 1)."'> << </a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='borrow.php?page=".$i."'>" .$i. "</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='borrow.php?page=".($page + 1)."'> >> </a>";
     echo "<a href='borrow.php?page=".$total_pages."'> Lõppu </a>";
    }
  ?>  
 </div>
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

