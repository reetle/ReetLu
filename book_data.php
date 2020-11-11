<?php
include_once("config.php");
//plagination
$record_per_page = 25;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}
$start_from = ($page-1)*$record_per_page;

$sql= "SELECT id, pealkiri, autor, aasta, liik, keel, valjaandja, 
kogus, riiul, marksona, markused FROM book order by pealkiri LIMIT $start_from, $record_per_page "; 
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
<form action=" book_data.php" method="post" >
Otsi: <select name="column">
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
	<!--
<select name="column1">
<option value="tuhi"> </option>
	<option value="'%$search%'">Sisaldab</option>
	<option value="'%$search'">Algab</option>
	<option value="'%search'">On täoselt</option>
	<option value="'%search%'">Lõpeb</option>
	</select> -->

 <?php
/*viimane otsing jääb otsing aknasse*/
$search = (isset($_POST['search'])) ? htmlentities($_POST['search']) : '';

?>
 <input type="text" name="search" value="<?= $search ?>">
<input type ="submit" value="otsi">
<input type="button" value="Tühista" onclick="location.href='book_data.php'"  />

</form>



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
  <table id="table1">

    <tr>
		<th onclick="sortTable(0)">Pealkiri</th>  <!-- diltreerib pealkirja järgi kasvavalt või kahanevalt-->
		<th onclick="sortTable(1)">Autor</th> 
		<th onclick="sortTable(2)">Aasta</th>
		<th onclick="sortTable(3)">Liik</th> 
		<th onclick="sortTable(4)">Keel</th>
		<th onclick="sortTable(5)">Väljaandja</th> 
		<th onclick="sortTable(6)">Kogus</th> 
		<th onclick="sortTable(7)">Riiul</th>
		<th onclick="sortTable(8)">Märksõna</th> 
		<th onclick="sortTable(8)">Märkused</th> 
		
		<th> </th>	
		<th> </th>			
    </tr>
	

    <?php
if(count($_POST)>0) {
$search=$_POST['search'];
$column=$_POST['column'];
		
	$sql= "SELECT id, pealkiri, autor, aasta, liik, keel, valjaandja, 
	kogus, riiul, marksona, markused FROM book where $column like '%$search%'" ;
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));} 
 
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

<!-- plagination -->	
<div id="plagination">
<style>
#plagination a {
   padding:4px 8px;
   border:1px solid #ccc;
   color:#333;
	text-decoration: none;   
	margin-top:25px;
  }
#plagination a:hover {
	background-color: #ccc;
}
</style>
<?php
	/*tabel kuvab 10 esimest kirjet ja jagab ülejäänud tabeli kehekülge https://www.webslesson.info/2016/05/how-to-make-simple-pagination-using-php-mysql.html*/
	$page_query = "SELECT id, pealkiri, autor, aasta, liik, keel, valjaandja, kogus, riiul, marksona, markused
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