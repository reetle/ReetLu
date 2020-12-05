<?php 
session_start();

include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Sisene</title>
</head>
<body> 
<style>
ul {
  list-style-type: none;
}
li a{
	color:black;
	text-decoration: none;
	
}


</style>
<div class="container">

		
		<br>
		<br>
		<div>
			<ul >
			<?php if (isset($_SESSION['user_id'])) { ?>
				<!--<li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>-->
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?> 
				<li><a href="login.php">Sisene</a></li>
				<li><a href="register.php">Registreeri</a></li>
				<?php } ?>
			</ul>
		</div>
		
		
		
	
</div>	
</body>
</html>