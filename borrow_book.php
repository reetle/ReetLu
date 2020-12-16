<?php 

include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Laenutamine</title>

</head>
<body> 
 <div class="container">
<div class="row" id="borrow">
    <div class="col-4" style="margin-left:50px; "  >   
  <br>
  <p> Kas sa soovid antud raamatud laenutada: </p>
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
     
<p>Laenutamiseks täida väljad:</p> 
  <form action=" " method="post">      
        <div class="form-group">
            <label for="lugeja">Nimi </label>
              <input type="text" name="lugeja" class="form-control">
      </div>
         <div class="form-group">
            <label for="kogus">Kogus </label>
              <input type="text" name="pohjus" class="form-control">
           </div>
        <div class="form-group">
          <label for="algus_kp">Kuupäev</label>
              <input type="date" name="algus_kp" class="form-control">
        </div>
      <div class="form-group">
		<input type="submit" name="Submit" value="Laenuta" class="btn btn-secondary btn-sm" />
					</div>
	</form>
            <div class="back_but">
<button onclick="window.location.href='borrow.php';">Tühista</button>
</div> 

   
<?php	
	if(isset($_POST['Submit'])) {
		$lugeja= mysqli_real_escape_string($conn, $_POST['lugeja']);
		$kogus = mysqli_real_escape_string($conn, $_POST['kogus']);
		$algus_kp = mysqli_real_escape_string($conn, $_POST['algus_kp']);
	

$result = mysqli_query($conn, "INSERT INTO borrow_book (lugeja, meedia_id, meedia_liik,
pealkiri, autor, kogus, algus_kp)
SELECT '$lugeja', book.id, 'RA', book.pealkiri, book.autor, '$kogus', '$algus_kp'
FROM book WHERE book.id=$id");
	header("Location: borrow.php");

}
?> 


 </div>
    </div>
     </div>
</body>
</html>
