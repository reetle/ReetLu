<?php
include_once("config.php");
$sql= "SELECT id, pealkiri,andmekandja, autor, ilmumisaasta, liik, keel, valjaandja, kogus, riiul, marksõna FROM library_fund where meedia_liik like 'av'";
$result = mysqli_query($conn, $sql) or die("error:".mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Raamatud</title>
</head>
<body>
<a href="book_add.php">lisa</a><br/><br/>

    <table id="table1">
    <tr>
		<th>pealkiri</th> 
		<th>AV Tüüp</th> 
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
        echo "<td>".$row['andmekandja']."</td>";
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
</body>
</html>

<div id="back_button">
<a href="menu.php">Tagasi esilehele</a>
</div>
</body>
</html>