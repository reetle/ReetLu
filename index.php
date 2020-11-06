<?php/*
include_once("config.php");

if(isset($_POST['submit'])){

 
	$username= htmlspecialchars(trim($_POST['username'])); /*ei saa sisestada tühikuid eiga html märgendeid
	$password= htmlspecialchars(trim($_POST['password']));

    if ($username != "" && $password != ""){

        $sql_query = "select username, password from users where username='".$username."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
		

        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;
            header('Location: menu.php');
        }else{
            echo "Invalid username and password";
        }

    }

}*/
	
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Page Title</title>
</head>
<body>
<div class="grid-container">
  <div class="item2">
  <div class="login">
<!--	<form action="index.php" method="post">
    <label for="username">kasutajanimi</label>
    <input type="text" placeholder="Kasutajanimi" name="username" required>

    <label for="password">Salasõna</label>
    <input type="password" placeholder="Salasõna" name="password" required>

    <input type="submit" name="submit" value="Sisene"> 
</form>

   </div> 
  </div> -->
<div class="menu">
<a href="menu.php">sisene</a>
<a href="reg.php">registreeri</a>
</div>
</body>
</html>
