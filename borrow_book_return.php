<?php
include_once('config.php');

?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<title>Laenutamine</title>

<body> 
<div class="grid-container">
  <div class="item1">  
  <form action=" " method="post" name="form1">
		<table width="25%" border="0">
		
			<tr>
				<td>Kuupäev:</td>
				<td><input type="text" name="tagastus_kp"></td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" name="Submit" value="Tagasta"></td>
			</tr>
		</table>
	</form>
	<?php
if(isset($_POST['Submit'])) {
		$tagastus_kp =$_POST['tagastus_kp'];
	

$result = mysqli_query($conn," UPDATE borrow_book SET tagastus_kp='$tagastus_kp' where id='$id' ");

	header("Location: borrow.php");
}
?>
</div> 

<div class="item2"> </div>
 <div class="item3"> </div> 

<div class="item4"> </div>

</div>
</body>
</html>