<?php
session_start();
$bread=$_POST['bread'];
$phone=$_POST['phonenumber'];
$land=$_POST['landmark'];
$pin=$_POST['pincode'];
$findings=$_POST['findings'];
$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$s="select email from form where pincode='$pin' && bread='$bread'";
$re=mysqli_query($con,$s);
$rr=mysqli_query($con,$s);
$r=mysqli_fetch_array($rr);
if($r==[])
{
	$W='1';
	
}
else
{

while ($rows=$re->fetch_assoc())
{
	$to=$rows['email'];
	$subject='FROM DOGS RESCUE';
	$message=" A dog of bread '$bread' is found missing by someone.if your dog missing you can contact '$phone'";
	$header="From:dogs@allforbooks.co.in\r\n";
	mail($to,$subject,$message,$header);
}
$W='2';
}
if($W=='1')
{
	echo"<script>alert('SORRY WE CANNOT FIND ANY USER IN YOUR AREA.');";
	echo"window.location.href='home.php';</script>";
}
else
{
	echo"<script>alert('THANK YOU FOR USING OUR WEBSITE.WE SENT YOUR REQUEST TO OUR USERS.');";
    echo"window.location.href='home.php';</script>";


}

?>