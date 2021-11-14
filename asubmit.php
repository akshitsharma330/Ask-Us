<?php session_start();

$a=$_REQUEST['answer'];


if(isset($_SESSION['email']))
          { 
			$ae=$_SESSION['email'];
          }
		  else
		  {
			$ae = "Anonymous";	
		  }




$l=$_REQUEST['links'];
$qid=$_SESSION['qid'];
$cname=$_SESSION['cname'];

  date_default_timezone_set("Asia/Kolkata");
	$tm=date("h:i:sa");
	$ip=$_SERVER["REMOTE_ADDR"];
	$dt=date("d/m/y");
$con=mysqli_connect("localhost","root","","questionera");
$ins="insert into answer values('','$cname','$qid','$a','$ae','$l','0','$dt','$tm','$ip')";
$res=mysqli_query($con,$ins);
if($res>0)
{
	header("location:answer.php?qid=$qid &cname=$cname");
}
else
{
	
	echo"<h1><i>".mysqli_error($con)."</i></h1>";
}
mysqli_close($con);

?>
