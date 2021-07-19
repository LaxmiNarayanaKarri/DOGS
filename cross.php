<?php
session_start();
$bread=$_POST['bread'];
$phone=$_POST['phonenumber'];
$gender=$_POST['gender'];
$pin=$_POST['pincode'];
$email=$_POST['email'];
if($gender=='male')
{
	$gende='female';
}
else
{
	$gende='male';
}
$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$s="select * from form where pincode='$pin' AND bread='$bread' AND gender='$gende'";
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
	$message=" A dog near by you of bread '$bread' and gender '$gender' is ready to mate. If you are intrested you can contact '$phone'";
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