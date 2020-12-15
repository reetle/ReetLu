<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Mahakandmine</title>
</head>
    <style>
        .select{
            margin-top: 25px;
            margin-left: 50px;
          
        }
        
    </style>
<body> 

<div class="grid-container">
  <div class="select">  
<form action=" " form="form2" method="POST">
  <p>Vali meedia liik</p>  
	<input type="radio" name="select" value="book"> 		<label for="book">Raamat</label> <br>
	<input type="radio" name="select" value="textbook" > 	<label for="textbook">Õpik</label> <br>
	<input type="radio" name="select" value="periodicals">	<label for="periodicals">Perioodika</label> <br>
	<input type="radio" name="select" value="audio-video"> <label for="audio-video">Audio-video</label> <br>
	<input type="radio" name="select" value="workbook"> 	<label for="workbook">Töövihik</label> <br>
	<input type="radio" name="select"  value="meth-library"><label for="meth-library">Metoodiline kirjandus</label> <br>
<input type="submit" name="submit" value="Vali">  
</form>


</div> 

 <div > 

 <?php
 if (isset($_POST['select'])){
$select=$_POST['select'];

//Raamat
	if ($select == 'book') {
		header("Location: book_data.php"); 
}
//õpik
	elseif ($select == 'textbook' ) {	
	header("Location: textbook_data.php");   
}
//perioodika
	elseif ($select == 'periodicals' ) {	
	header("Location: periodicals_data.php");		
}
//audio-video
	elseif($select == 'audio-video' ) {	
	header("Location: audio_data.php");
}	

//töövihik
	elseif ($select == 'workbook' ) {
		header("Location: workbook_data.php");
}		
//metoodiline kirjandus
	elseif ($select == 'meth-library' ) {
		header("Location: meth_library_data.php");
   
	
}	}
 ?>

</div>	

</div>
</body>
</html>