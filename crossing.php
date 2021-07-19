<!DOCTYPE html>
<html>
<head>
	<title>dogs rescue</title>
	<link rel="stylesheet" type="text/css" href="s.css">
	<style type="text/css">
	body
	{

		
		background: url(image7.jpg);
        overflow:hidden;
    	background-size:100% 100%;
	    background-position:right;
	    background-repeat: no-repeat;
        background-attachment: fixed;
	}
	.r
	{
		top:25px;
	}
	ul
	{
	    position:center;
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
<h1 class="r">WE WILL HELP YOU OUT</h1>
<h2 class="re">FILL THIS FORM</h2>
<form action="cross.php" method="post">
<input type="text" name="bread" class="c" placeholder="BREAD NAME" required>
<br><br>
<br>
<input type="text" name="phonenumber" class="c" placeholder="PHONENUMBER" required>
<br><br><br>
<input type="text" name="gender" class="c" placeholder="DOG'S GENDER" >
<br><br><br>
<input type="text" name="pincode" class="c" placeholder="PINCODE" required>
<br><br>
<br>
<input type="text" name="email" class="c" placeholder="EMAIL">
<br><br>
<button name="submit" type="submit" class="c2"> SUBMIT</button>
</form>
</body>
</html>