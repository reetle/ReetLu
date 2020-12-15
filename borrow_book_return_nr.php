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
<body> 

<div class="container">
<div class="row" id="borrow" style="margin-top:50px; "  >
    <div class="col-4" style="margin-left:50px; "  >   
        <form action=" " method="POST"  >
    <div class="form-group">
        <select name="column" class="form-control">
			<option value="book" >Raamat</option>
			<option value="audio-video">Audio-Video</option>
			<option value="textbook">Töövihik</option>
			<option value="workbook">Õpik</option>
			<option value="met_library">Met.kirjandus</option>
			<option value="periodicals">perioodika</option>
		</select> <br>
   </div>
        <div class="form-group">
              <label for="select">Sisesta invenatri nr: </label>
			<input type="text" name="select" required class="form-control">
            </div>
        <div class="form-group">
              <label for="tagastus_kp">Sisesta gagastamis kuupäev </label>
            <input type="date" name="tagastus_kp" class="form-control" >
              </div>
         <div class="form-group">
			<input type ="submit" value="Tagasta" class="btn btn-secondary btn-sm"> 
       </div> 
		</form>


</div> 


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
<div class="back_but">
<button onclick="window.location.href='borrow.php';" >Tagasi</button>
</div> 
</div>
</body>
</html>