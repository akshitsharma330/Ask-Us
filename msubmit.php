<?php
$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$t=$_REQUEST['telephone'];
$m=$_REQUEST['message'];
$connect=mysqli_connect("localhost","root","","questionera");
$q="insert into contactform values('','$n','$e','$t','$m')";
$result=mysqli_query($connect,$q);
if($result>0)
{
	
	header("location:https://api.whatsapp.com/send?phone=+917696067626&text=Name:$n, Email:$e, Mobile: $t, Message: $m");
}
else
{
	echo "Error A gya".mysqli_error($connect);
}
mysqli_close($connect);