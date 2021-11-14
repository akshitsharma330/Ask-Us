<?php session_start();
$a=$_REQUEST['answer'];
$e=$_SESSION['email'];
$l=$_REQUEST['links'];
$con=mysqli_connect("localhost","root","","questionera");
$ins="insert into answer values('','$a','$e','1','$l','0')";
$res=mysqli_query($con,$ins);
if($res>0)
{
	echo "Answer Is Submitted";
}
else
{
	
	echo"<h1><i>".mysqli_error($con)."</i></h1>";
}
mysqli_close($con);

?>
