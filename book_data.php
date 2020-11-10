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

$sql= "SELECT id, pealkiri, autor, ilmumisaasta, liik, keel, valjaandja, 
kogus, riiul, marksona FROM library_fund where meedia_liik like 'ra' LIMIT $start_from, $record_per_page" ;
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

</head>
<body>
<div class="grid-container">
  <div class="item1">

<div class="search_menu">
<a href="book_add.php">lisa</a>
<a href="readers_multible.php">Muuda </a>
<a href="#">Prindi</a>
<a href="#">Ekspordi andmed</a>

<br> <br>
<form action=" book_data.php" method="post" >
Vali: <select name="column">
	<option value="pealkiri">Pealkiri</option>
	<option value="autor">Autor</option>
	<option value="liik">Liik</option>
	<option value="keel">Keel</option>
	<option value="valjaandja">Väljaandja</option>
	<option value="kogus">Kogus</option>
	<option value="riiul">Riiul</option>
	<option value="marksona">Märksõna</option>
	</select>
	
<select name="column1">
	<option value="includes">Sisaldab</option>
	<option value="start">Algab</option>
	<option value="exactly">On täoselt</option>
	<option value="end">Lõpeb</option>
	</select>

 <input type="text" name="search">
<input type ="submit" value="otsi">
<input type="button" value="Tühista" onclick="location.href='book_data.php'"  />

</form>



</div>
</div>
<div class="item2">
<div class= "menu">
	
		<ul style="list-style-type:none">
		<!--	<li> <a href="book_data.php"> Raamatud</a> </li>  --> 
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
  <table class="tablemanager" id="table1">
	<thead>
    <tr>
		<th>Pealkiri</th>  
		<th>Autor</th> 
		<th>Aasta</th>
		<th>Liik</th> 
		<th>Keel</th>
		<th>Väljaandja</th> 
		<th>Kogus</th> 
		<th>Riiul</th>
		<th>Märksõna</th> 
		<th  </th>			
    </tr>
	</thead>
		<tbody>	
    <?php
if (isset($_POST['search'])){
	$search=$_POST['search'];

if (isset($_POST['column'])){
		$column=$_POST['column'];
		

				
		
	$sql= "SELECT id, pealkiri, autor, ilmumisaasta, liik, keel, valjaandja, 
	kogus, riiul, marksona FROM library_fund where meedia_liik like 'ra' AND  $column like '%$search%'" ;}
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
}
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
        echo "<td><a href='book_edit.php?id=$row[id]' style='text-decoration: none'>Muuda</a> | 
		<a href='book_delete.php?id=$row[id]'style='text-decoration: none' class='delete' >Kustuta</a></td></tr>";
}
    ?>
	</tbody>
    </table>
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
	/*tabel kuvab 10 esimest kirjet ja jagab ülejäänud tabeli kehekülge*/
	$page_query = "SELECT id, pealkiri, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksona FROM library_fund where meedia_liik like 'ra'";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 25)
    {
     $start_loop = $total_pages - 25;
    }
    $end_loop = $start_loop + 24;
    if($page > 1)
    {
     echo "<a href='book_data.php?page=1'>Tagasi</a>";
     echo "<a href='book_data.php?page=".($page - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='book_data.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='book_data.php?page=".($page + 1)."'>>></a>";
     echo "<a href='book_data.php?page=".$total_pages."'>Edasi</a>";
    }
  ?>  
</div>

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
</div>	
<div class="item4">


</div>
</body>
</html>