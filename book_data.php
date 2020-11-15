<?php
include_once("config.php");
$record_per_page = 20; //näitab 25 kirjet ühel lehel
$page = '';
if(isset($_GET["page"])){
 $page = $_GET["page"];}
else{
 $page = 1;}
$start_from = ($page-1)*$record_per_page;
//kustutamine multible
if(isset($_POST['but_delete'])){

  if(isset($_POST['box'])){
    foreach($_POST['box'] as $deleteid){

      $deleteUser = "DELETE from book WHERE id=".$deleteid;
      mysqli_query($conn,$deleteUser);
    }
  }
}
/*muudame multible
if(isset($_POST['but_edit'])){
 if(isset($_POST['box'])){
	foreach($_POST['box'] as $updateid){
    header("Location: edit.php");
}}
}*/

$sql= "SELECT * FROM book order by pealkiri LIMIT $start_from, $record_per_page "; 
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
<script src="js/jquery.min.js"></script> <!-- kustutamise teate jaoks-->

</head>
<body>


<div class="grid-container">
  <div class="item1" ">

<div class="search_menu">
<button onclick="window.location.href='book_add.php';">Lisa uus raamat</button>
<button type="submit" form="form1"  name="but_delete" class="delete" >Kustuta</button>
<!--
<a href="#">Prindi</a>
<a href="#">Ekspordi andmed</a>-->
<!--<form method="post" action="export.php" align="center">  
<input type="submit" name="Ekspordi csv" value="Expordi" class="btn btn-success" />  
                </form>  -->
<br> <br>

<form action=" book_data.php" method="POST" >
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

</div>
</div>
<div class="item2"> 
<?php
include_once("library_menu.php");
?>
</div>

  <div class="item3">
 <form method="post" action="" id="form1" >
 <br> <!-- <input type='submit' value='Kustuta multible' name='but_delete' class='delete' id='test' style="border: none; text-decoration: none; color: black;"> -->
 <!-- <input type='submit' value='Muuda multible ' name='but_edit' class='edit' >-->
<table id="table1">
<thead>
<tr> 		
		<th><input type="checkbox" id="select_all" /></th>
		<th onclick="sortTable(1)">Pealkiri</th>  <!-- filtreerib pealkirja järgi kasvavalt või kahanevalt-->
		<th onclick="sortTable(2)">Autor</th> 
		<th onclick="sortTable(3)">Aasta</th>
		<th onclick="sortTable(4)">Liik</th> 
		<th onclick="sortTable(5)">Keel</th>
		<th onclick="sortTable(6)">Väljaandja</th> 
		<th onclick="sortTable(7)">Kogus</th> 
		<th onclick="sortTable(8)">Riiul</th>
		<th onclick="sortTable(9)">Märksõna</th> 
		<th onclick="sortTable(10)">Märkused</th> 
		
		<th> </th>	
		<th></th>			
    </tr>
	</thead>
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
$sql= "SELECT * FROM book where $column like '" . $search . "' " ;} //täpselt  ei toimi 
}

$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));

  while($row = mysqli_fetch_array($result)) { 
		echo "<tr>";	
		echo "<td><input type='checkbox' name='box[]' value='$row[id]' ></td>";		
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
        //echo "<td><a href='book_edit.php?id=$row[id]'> <img src='src/edit-icon-2375785_640.png' width='25' /></a> </td>";
		echo "<td><a href='book_edit.php?id=$row[id]' style='text-decoration: none'>Muuda</a> </td>";
		//echo "<td> <a href='book_delete.php?id=$row[id]'style='text-decoration: none' class='delete' > <img src='src/delete-1727486_1280.png' width='30' /></a></td>
		echo "<td> <a href='book_delete.php?id=$row[id]'style='text-decoration: none' class='delete' >Kustuta </a></td>
	</tr>";
}

    ?>
</tbody>
    </table>	
</form>

<script>//checkime kõik boxid ära 
$("#select_all").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
<script> //küsib üle kustutamise kohta üks haaval kustutades
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Oled sa kindel et soovid kustutada')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
<script> //küsib üle kustutamise kohta multible kustutades
$(document).ready(function(){
    $("button.delete").click(function(e){
        if(!confirm('Oled sa kindel et soovid kustutada')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>

<!-- tabelite headerite sorteerimiseks https://www.w3schools.com/howto/howto_js_sort_table.asp-->
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("table1");
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

<!-- pagination -->	
<div id="pagination">
<style>
#pagination a {
   padding:4px 8px;
   border:1px solid #ccc;
   color:#333;
	text-decoration: none;   
	margin-top:25px;
  }
#pagination a:hover {
	background-color: #ccc;
}
</style>
<?php
	/*tabel kuvab 10 esimest kirjet ja jagab ülejäänud tabeli kehekülge https://www.webslesson.info/2016/05/how-to-make-simple-pagination-using-php-mysql.html*/
	$page_query = "SELECT *
	FROM book ORDER BY 'pealkiri'";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5) /*palju kuvab lehel*/
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a href='book_data.php?page=1'>Algusesse</a>";
     echo "<a href='book_data.php?page=".($page - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='book_data.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='book_data.php?page=".($page + 1)."'>>></a>";
     echo "<a href='book_data.php?page=".$total_pages."'>Lõppu</a>";
    }
  ?>  
</div>

</div>	
<div class="item4">


</div>
</body>
</html>