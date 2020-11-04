<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Klassid</title>
</head>
<body>
<div class="grid-container">
  <div class="item1">

<div class="search_menu">
<a href="class_add.php">Lisa</a> 
<a href="#">Trüki</a> 
<a href="#">Ekspordi</a> 
</div>
<form name="form1" method="get" action="class_data.php">

<select id="filter1" name="filter1">
	<option value="klass" name="klass" >klass</option>
    <option value="klass" name="klass" >klass</option>
    <option value="taht" name="taht"  >Täht</option>
    <option value="klassijuhataja" name="klassjuhataja" >Klassijuhataja</option>
    <option value="klassiruum" name="klassruum" >Klassiruum</option>
	<option value="markused" name="markused" >Märkused</option> 
	</select> 

	
<!--<select id="filter2" name="filter2">
    <option value="on_tapselt" name="on_tapselt" >On täpselt</option>
    <option value="sisaldab" name="'al%'" >Sisaldab</option>
    <option value="algab" name="'re%'">Algab</option>
    <option value="loppeb" name="'%[a-y]'" >õppeb</option>
	</select>
-->
	<input type="text" name="filtreeri">
	
	<input type="submit" name='submit' value="filtreeri">
	
</form>
</div>
<div class="item2">
<div class= "menu">
		<ul style="list-style-type:none">
			<li> <a href="readers_data.php"> Lugejad</a> </li> 
			<li> <a href="class_data.php"> Klassid</a> </li>  			
		</ul>
	</div> </div>

  <div class="item3"> 
  
    <table id="table1">
    <tr>
		<th>Klass</th> 
		<th>Täht</th> 
		<th>Klassijuhataja</th>
		<th>Klassiruum</th> 
		<th>Märkused</th>
		<th> </th>
    </tr>
	
<?php	
if (isset($_GET['submit'])) { 
$filtreeri = mysqli_real_escape_string($conn, $_GET['filtreeri']);  /*turvalususe pärast*/
$column = mysqli_real_escape_string($conn, $_GET['filter1']);		
	
$search = ("SELECT * FROM class where $column like '%$filtreeri%'"); 

	$result = mysqli_query($conn, $search); 
	if(mysqli_num_rows($result)> 0 ){
		while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['klass']."</td>";
        echo "<td>".$row['taht']."</td>";
		echo "<td>".$row['klassijuhataja']."</td>";
        echo "<td>".$row['klassiruum']."</td>";
        echo "<td>".$row['markused']."</td>";
        echo "<td><a href='class_edit.php?id=$row[id]'>Edit</a> | 
		<a href='class_delete.php?id=$row[id]'>Delete</a></td></tr>";
}}}
	 else {
		 $result = mysqli_query($conn, "SELECT * FROM class");
		while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['klass']."</td>";
        echo "<td>".$row['taht']."</td>";
		echo "<td>".$row['klassijuhataja']."</td>";
        echo "<td>".$row['klassiruum']."</td>";
        echo "<td>".$row['markused']."</td>";
        echo "<td><a href='class_edit.php?id=$row[id]'>Edit</a> | 
		<a href='class_delete.php?id=$row[id]'>Delete</a></td></tr>";
		
    }}
	 
    ?>
    </table>
	</div>

<div class="item4">

<div id="back_button">
<a href="menu.php">Tagasi esilehele</a> <br>
<a href="readers.php">Tagasi eelmisele lehele</a>
</div>
</div>
</div>

</body>
</html>