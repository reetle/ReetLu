<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Mahakandmine</title>
</head>
<body> 

<div class="grid-container">
  <div class="item1">  
<form action=" " method="POST" class="vorm1" >

		<select name="column">
			<option value="book">Raamat</option>
			<option value="audio-video">Audio-Video</option>
			<option value="textbook">Töövihik</option>
			<option value="workbook">Õpik</option>
			<option value="met_library">Met.kirjandus</option>
			<option value="periodicals">perioodika</option>
		</select> 


			<input type="text" name="select" required>
            <input type="date" name="tagastus_kp" >
			<input type ="submit" value="Tagasta"> 	
		</form>


</div> 
<div class="item2"> </div>
 <div class="item3"> 

 <?php
 if ((isset($_POST['select'])) and(isset($_POST['column']))) {
$select=$_POST['select'];
 $column=$_POST['column'];
$tagastus_kp = mysqli_real_escape_string($conn, $_POST['tagastus_kp']);	

//Raamat
	if ($column == 'book') {
	$result = mysqli_query($conn, "UPDATE borrow_book SET tagastus_kp='$tagastus_kp' WHERE meedia_id=$select and meedia_liik like 'ra'" );
}
//õpik
	elseif ($column == 'textbook' ) {	
        $result = mysqli_query($conn, "UPDATE borrow_book SET tagastus_kp='$tagastus_kp' WHERE meedia_id=$select and meedia_liik like 'op'" );
    }
//perioodika
	elseif ($column == 'periodicals' ) {	
	$result = mysqli_query($conn, "UPDATE borrow_book SET tagastus_kp='$tagastus_kp' WHERE meedia_id=$select and meedia_liik like 'pe'" );
}
//audio-video
	elseif($column == 'audio-video' ) {	
        $result = mysqli_query($conn, "UPDATE borrow_book SET tagastus_kp='$tagastus_kp' WHERE meedia_id=$select and meedia_liik like 'av'" );

}
//töövihik
	elseif ($column == 'workbook' ) {
        $result = mysqli_query($conn, "UPDATE borrow_book SET tagastus_kp='$tagastus_kp' WHERE meedia_id=$select and meedia_liik like 'tv'" );
    }
        
//metoodiline kirjandus
	elseif ($column == 'meth-library' ) {
	 $result = mysqli_query($conn, "UPDATE borrow_book SET tagastus_kp='$tagastus_kp' WHERE meedia_id=$select and meedia_liik like 'mk'" );
    }
     
 }
 ?>

</div>	
<div class="item4"> </div>
</div>
</body>
</html>