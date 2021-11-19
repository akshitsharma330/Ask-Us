<?php  

  $n=$_REQUEST['name'];
  $e=$_REQUEST['email'];
  $p=$_REQUEST['password'];
  $m=$_REQUEST['mobile'];
  $c=$_REQUEST['country'];
  $g=$_REQUEST['gender'];
  $q=$_REQUEST['qual'];
  $fn=$_FILES['picture']['name'];
$ft=$_FILES['picture']['type'];
$fs=$_FILES['picture']['size'];
$ftmp=$_FILES['picture']['tmp_name'];
$path="upload/".$fn;
$con=mysqli_connect("localhost","root","","questionera");
$upd="update user set name='$n',email='$e',password='$p',mobile='$m',country='$c',pic='$path', gender='$g',qualification='$q'  where email ='$e'";
$run=mysqli_query($con,$upd);
if($run>0)
{
	move_uploaded_file($ftmp,$path);
	header("location:eusignup.php?x=updated");
}
else
{
	echo mysqli_error($con);
}
?>