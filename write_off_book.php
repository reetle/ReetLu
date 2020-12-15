<?php 

include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Mahakandmine</title>

</head>
<body> 
<div class="container">
<div class="row" id="borrow">
    <div class="col-4" style="margin-left:50px; "  >   
  <br>
  <p> Kas sa soovid antud raamatud maha kanda: </p>
 <?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM book WHERE id=$id") ;
   
 if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "Inventari nr: " . $row["id"]. "<br> " . $row["pealkiri"]. "<br>  " . $row["autor"]. "<br>";
  }
} 
?>
  </div> 
		<div class="col-4" style="margin-top:25px; " >     
     
<p>Kas soovid mahakanda raamatut:</p> 
  <form action=" " method="post">      
        <div class="form-group">
            <label for="Akt_nr">Akt nr: </label>
              <input type="text" name="akt_nr" class="form-control">
      </div>
         <div class="form-group">
            <label for="pohjus">Põhjus: </label>
              <input type="text" name="pohjus" class="form-control">
           </div>
        <div class="form-group">
          <label for="kuupaev">Kuupäev </label>
              <input type="date" name="kuupaev" class="form-control">
        </div>
      <div class="form-group">
		<input type="submit" name="Submit" value="Kanna maha" class="btn btn-secondary btn-sm" />
					</div>
	</form>
            <div class="back_but">
<button onclick="window.location.href='book_data.php';">Tühista</button>
</div> 

   
<?php

	
	if(isset($_POST['Submit'])) {
		$akt_nr = mysqli_real_escape_string($conn, $_POST['akt_nr']);
		$pohjus = mysqli_real_escape_string($conn, $_POST['pohjus']);
		$kuupaev = mysqli_real_escape_string($conn, $_POST['kuupaev']);
	

$result = mysqli_query($conn, "INSERT INTO write_off (akt_nr,kuupaev, meedia_liik, meedia_id, pealkiri, autor, pohjus)
SELECT '$akt_nr', '$kuupaev' , 'RA', book.id, book.pealkiri, book.autor, '$pohjus'
FROM book WHERE book.id=$id");

$result = mysqli_query($conn, "DELETE FROM book WHERE id=$id");
	header("Location: book_data.php");
}
?> 
            
 </div>        
        
 </div> 

 
              
</div>
</body>
</html>
