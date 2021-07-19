<?php 

session_start();

 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>LOGGED IN</title>
 	<link rel="stylesheet" type="text/css" href="s2.css">
 	<style>
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
             margin-left:45%;
         }
 	</style>
 </head>
 <body>
	<a href="logout.php" class="log">LOGOUT</a>
	<h1 class="WELCOME"> WELCOME <?php echo $_SESSION['username']; ?></h1> 
	
	<h1 class="heading"> YOUR'S INFORMATION</h1>
		<br>
		
		<div class="divi">
		<label class="a1">USERNAME :</label>
		<input type="text" class="a2" value="<?php echo $_SESSION['username']; ?>">
		<br>
		<br>
		<label class="a3">PASSWORD  :</label>
		<input type="text" class="a4" value="<?php echo $_SESSION['password']; ?>">
		<br>
		<br>
		<label class="a5">EMAIL      :</label>
		<input type="email" class="a6" value="<?php echo $_SESSION['phone']; ?>">
		<br>
		<br>
		<label class="a7">    BREAD           :</label>
		<input type="text" class="a8" value="<?php echo $_SESSION['bread']; ?>">
		<br>
		<br>
		<label class="a9">FINDINGS       :</label>
		<input type="text" class="a10" value="<?php echo $_SESSION['findings']; ?>">
		<br>
		<br>
		<label class="a11">PINCODE      :</label>
		<input type="text" class="a12" value="<?php echo $_SESSION['pincode']; ?>">
		<br>
		<br>
		<label class="a13">DOG'S GENDER      :</label>
		<input type="text" class="a14" value="<?php echo $_SESSION['gender']; ?>">
		  </div>
	<button class="but" onclick="window.location.href='edit.php';"> EDIT</button>
  
 </body>
 </html>