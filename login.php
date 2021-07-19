<!DOCTYPE html>
<html>
<head>
	<title>dogs rescue</title>
	<link rel="stylesheet" type="text/css" href="s.css">
	<style type="text/css">
		body
		{
			background: url(image4.jpg);
			width:50%;
            overflow-x:hidden;
	        background-size:130% 100%;
	        background-position:center;
	        background-repeat: no-repeat;
            background-attachment: fixed;
		}
	</style>
</head>
<body>
	<ul>
	<a href="home.php" class="a1"> HOME</a>
	<a href="register.php" class="a2">REGISTER </a>
	<a href="login.php" class="a3">LOGIN</a>
	<a href="about.php" class="a4">ABOUT US</a>
</ul>
<h2 class="logih2" >LOGIN HERE</h2>
<form action="logi.php" method="post" class="form">
	<div class="box">
	<input type="text" name="user" class="u1" placeholder="USERNAME" required>
	<br>
	<br>
	<input type="password" name="pass" class="u1" placeholder="PASSWORD" required>
	<br>
	<br>
	<button name="submit" class="submit1"> SUBMIT</button>
</div>
</form>
</body>
</html>