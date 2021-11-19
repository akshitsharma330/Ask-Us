<?php session_start();
$c=$_REQUEST['name'];
$_SESSION['name']=$c;
$con=mysqli_connect("localhost","root","","questionera");
$ins="insert into category values('','$c')";
$res=mysqli_query($con,$ins);
if($res>0)
{
	header("location:category.php?msg=done");
}
else
{
	echo"mysqli_error($con)";
}
mysqli_close($con);

?>