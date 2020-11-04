<?php
include_once("config.php");
$sql= "SELECT id, pealkiri, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksõna FROM library_fund where meedia_liik like 'ra'";
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Raamatud</title>
</head>
<body>
<div class="grid-container">
  <div class="item1">

<div class="search_menu">
<a href="book_add.php">lisa</a><br/><br/>
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
		</ul>

	</div> </div>
  <div class="item3"> 
    <table id="table1">
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
        echo "<td>".$row['marksõna']."</td>";		
        echo "<td><a href='book_edit.php?id=$row[id]'>Edit</a> | 
		<a href='book_delete.php?id=$row[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</div>	
<div class="item4">

<div id="back_button">
<a href="menu.php">Tagasi esilehele</a> <br>
<a href="library_fund.php">Tagasi eelmisele lehele</a>
</div>
</div>
</body>
</html>