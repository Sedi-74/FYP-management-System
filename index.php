<?php

include "database.php";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Final Year Project Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

<body class = "back">
	<img src="img/b1(1).jpg" width="800">

	<div class = "login">
		<h1> class ="heading ">Coordinator Login</h1>
		<form methods="POST" action="">
				
			<label>Username</label>
				<p><input type="text" name="aname" required class="input"><br></p>
			<label>Password</label>
				<p><input type="Password" name="apass" required class="input"><br></p>
				<p class="remember_me">
			<label>
				<input type="checkbox" name="remember_me" id="remember_me">
				Remember me on this user
			 </label>
			 </p>
			<button type="submit" class="btn" name=" login">Login Here</button>

		</form>
	</div>
		<div class="login-help">
  		<p>Forgot your password? <a href="#">Click here to reset it</a>.</p> <!-- This is for people who lost their passwords-->
		</div>
	
		<div class ="footer">
	
		<footer><p>Copy Right &copy; Final Year Project Management System</p></footer>


		</div>
   
	</body>
</html>
