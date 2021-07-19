<!DOCTYPE html>
<html>
<head>
	<title>dogs rescue</title>
	<link rel="stylesheet" type="text/css" href="s.css">
	<style type="text/css">
		body
		{
			background: url(image3.jpg);
			width:50%;
            overflow-x:hidden;
	        background-size:150% 100%;
	        background-position:center;
	        background-repeat: no-repeat;
            background-attachment: fixed;
		}
		.regh2
		{
			margin-top: 300px;
			height: 510px;
		}
		.u
		{
			position: absolute;
			margin-top: -37px;
			margin-left: -330px;
		}
		.dic
		{
		    position:relative center;
		    margin-top:15vh;
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
<div class="dic">
    
<h2 class="regh2">REGISTER HERE</h2>

<form action="regs.php" method="post" class="regform">
	<input type="text" name="user" class="u" placeholder="USERNAME" required>
	<br>
	<br>
	<input type="password" name="pass" class="u" placeholder="PASSWORD" required>
	<br>
	<br>
	<input type="email" name="number" class="u" placeholder="EMAIL" required>
	<br>
	<br>
	<input type="text" name="bread" class="u" placeholder="BREAD NAME" required>
	<br>
	<br>
	<input type="text" name="findings" class="u" placeholder="SPECIAL FINDINGS">
	<br>
	<br>
	<input type="text" name="pin" class="u" placeholder="PIN CODE" required>
	<br>
	<br>
	<input type="text" name="gender" class="u" placeholder="DOG'S GENDER" required>
	<br>
	<button type="submit" name="submit" class="submit"> SUBMIT</button>
</form>
</div>
</body>
</html>