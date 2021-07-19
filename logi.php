<?php
session_start();

$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$name=$_POST['user'];
$pass=$_POST['pass'];
$s="select * from form where username ='$name' && pass='$pass' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
	$hg="select * from form where username ='$name' && pass='$pass' ";
	$re=mysqli_query($con,$hg);
	$r=mysqli_fetch_array($re);
	$_SESSION['username']=$name;
	$_SESSION['password']=$pass;
	$_SESSION['phone']=$r["email"];
	$_SESSION['bread']=$r["bread"];
	$_SESSION['findings']=$r["findings"];
	$_SESSION['pincode']=$r["pincode"];
	$_SESSION['id']=$r['id'];
	$_SESSION['gender']=$r['gender'];
	header('location:log.php');
} 
else
{
	echo"<script>alert('login failed.please enter vailed username and password.');";
	echo"window.location.href='login.php';</script>";
}
?>