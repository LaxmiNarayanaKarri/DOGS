<?php
session_start();

$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$name=$_SESSION['username'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$bread=$_POST['bread'];
$findings=$_POST['findings'];
$pin=$_POST['pin'];
$id=$_SESSION['id'];
if($pass=='')
{
	$pass=$_SESSION['password'];

}
if($phone=='')
{
	$phone=$_SESSION['phone'];
}
if($bread=='')
{
	$bread=$_SESSION['bread'];

}
if($pin=='')
{
	$pin=$_SESSION['pincode'];

}
if($findings=='')
{
	$findings=$_SESSION['findings'];
}
$q="UPDATE `form` SET username='$name',pass='$pass',email='$phone',bread='$bread',findings='$findings',pincode='$pin' WHERE id=$id ";
$qu=mysqli_query($con,$q);
if($qu)
{
	echo"<script>alert('updated successfully.please re-login to check ');";
	echo"window.location.href='login.php';</script>";
}
else
{
	echo"<script>alert('not updated successfully.');";
	echo"window.location.href='home.php';</script>";
}

  ?>