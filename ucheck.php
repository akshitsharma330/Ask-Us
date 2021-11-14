<?php session_start();
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];


$con=mysqli_connect("localhost","root","","questionera");
$sel="select * from user where email='$e' and password='$p'";
$run=mysqli_query($con,$sel);
if($row=mysqli_fetch_array($run))
{
	$_SESSION['email'] = $e;
	header("location:index.php");

}
else
{   
	header("location:usignin.php?msg=Details are incorrect");
}
mysqli_close($con);