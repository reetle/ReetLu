<?php
// including the database connection file
include_once("config.php");

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Laenutamine</title>
</head>
<body> 
	<div class="container">
	<div class="row" id="borrow" style="margin-top:50px;"  >
    <div class="col-4" style="margin-left:50px; "  >  
	<form name="form1" method="post" >
		<table border="0">
          <div class="form-group">
			<tr>
			
				<td>Sisesta tagastus kuupäev</td>
				<td><input type="date" name="tagastus_kp" class="form-control" ></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Tagasta" class="btn btn-secondary btn-sm"></td>
			</tr>
              </div>
		</table>
	</form>
        <div class="back_but">
<button onclick="window.location.href='book_data.php';">Tühista</button>
</div> 
<?php

if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($conn, $_POST['id']);
$tagastus_kp = mysqli_real_escape_string($conn, $_POST['tagastus_kp']);	
	
$result = mysqli_query($conn, "UPDATE borrow_book SET tagastus_kp='$tagastus_kp' WHERE id=$id");
header("Location: borrow.php");
}

?>    </div> </div>
    </div>
</body>
</html>