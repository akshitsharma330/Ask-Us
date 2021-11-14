<?php session_start();
$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
$m=$_REQUEST['mobile'];
$c=$_REQUEST['country'];
$g=$_REQUEST['gender'];
$q=$_REQUEST['qual'];
$fn=$_FILES['pic']['name'];
$ft=$_FILES['pic']['type'];
$fs=$_FILES['pic']['size'];
$ftmp=$_FILES['pic']['tmp_name'];
$path="upload/".$fn;
$con=mysqli_connect("localhost","root","","questionera");
$ins="insert into user values('$n','$e','$p','$m','$c','$path','$g','$q')";
$res=mysqli_query($con,$ins);
if($res>0)
{
	move_uploaded_file($ftmp,$path);
	header("location:usignin.php?msg=You are registered Now.");
}
else
{
	
	echo"<h1><i>".mysqli_error($con)."</i></h1>";
}
mysqli_close($con);

?>