<?php 

session_start();

 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>LOGGED IN</title>
 	<link rel="stylesheet" type="text/css" href="s2.css">
 	<style type="text/css">
 		.a6
 		{
 			margin-left: 48px;
 			width: 180px;
 		}
 		
 	     body
         {
	        background-color:orange;
	        overflow:hidden;
         }
         .divi
         {
             margin-left:36%;
             text-align:left;
         }
         .but
         {
             margin-left:43%;
         }
 	</style>
 </head>
 <body>
	<a href="logout.php" class="log">LOGOUT</a>
	<h1 class="WELCOME"> WELCOME <?php echo $_SESSION['username']; ?></h1> 
	<h2 class="heading"> EDIT YOUR INFORMATION</h1>
		<br>
		<form action="update.php" method="post">
		<div class="divi">
		<br>
		<br>
		<label class="a3">PASSWORD  :</label>
		<input type="text" name="pass" class="a4" placeholder="<?php echo $_SESSION['password']; ?>">
		<br>
		<br>
		<label class="a5">EMAIL     :</label>
		<input type="email" name="phone" class="a6" placeholder="<?php echo $_SESSION['phone']; ?>">
		<br>
		<br>
		<label class="a7" >    BREAD           :</label>
		<input type="text" name="bread" class="a8" placeholder="<?php echo $_SESSION['bread']; ?>">
		<br>
		<br>
		<label class="a9" >FINDINGS       :</label>
		<input type="text" name="findings"  class="a10" placeholder="<?php echo $_SESSION['findings']; ?>">
		<br>
		<br>
		<label class="a11">PINCODE      :</label>
		<input type="text" name="pin" class="a12" placeholder="<?php echo $_SESSION['pincode']; ?>">
	</div>
	<br>
	<br>
	<button class="but" type="submit"> UPDATE</button>
</form>
 </body>
 </html>