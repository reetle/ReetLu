
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Page Title</title>
</head>
<body>
<div class="grid-container">
  <div class="item2">
  <div class="reg">
	<form action="reg.php" method="post">
	
	<h2>Sisesta andmed</h2>
    <label for="username">Kasutajanimi</label>
    <input type="text" placeholder="Sisesta kasutajanimi" name="username"> <br><br>

    <label for="password">Email</label>
    <input type="email" placeholder="Sisesta email" name="email"><br><br>
	
	 <label for="password">Salasõna</label>	 
    <input type="password" placeholder="Sisesta salasõna" name="password_1" required><br><br>
	
	 <label for="password">Korda Salasõna</label>	 
    <input type="password" placeholder="Korda salasõna" name="password_2" required><br><br>

    <input type="submit" name="submit" value="Registreeri"> 
</form>

   </div> 
   <?php

session_start();

include_once("config.php");
	
	if(isset($_POST['submit'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
			

		$query = "INSERT INTO users (username, email, password) 
  			 VALUES('$username', '$email', '$password_1')";
			mysqli_query($conn, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
  }


	?>
  </div>
<div class="menu">
<a href="index.php">Sisene</a>
</div>
</body>
</html>
