<?php
session_start();

$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$name=$_POST['user'];
$pass=$_POST['pass'];
$phone=$_POST['number'];
$bread=$_POST['bread'];
$findings=$_POST['findings'];
$pin=$_POST['pin'];
$gender=$_POST['gender'];
$s="select * from form where username ='$name' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num>=1){
	echo"<script>alert('Username already taken.Try to add some numbers at the end .');";
	echo"window.location.href='register.php';</script>";
}
else
{

	$reg="insert into form(username,pass,email,bread,findings,pincode,gender) values('$name','$pass','$phone','$bread','$findings',
	'$pin','$gender')";
	mysqli_query($con,$reg);
	echo"<script>alert('Registration Successful.You may Login now.');";
	echo"window.location.href='login.php';</script>";
}


  ?>