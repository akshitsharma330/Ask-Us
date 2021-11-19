
<?php session_start();


$c=$_REQUEST['cname'];
$qn=$_REQUEST['name'];    
$d=$_REQUEST['desc'];
	date_default_timezone_set("Asia/Kolkata");
		$dt=date("d/m/y");
		$tm=date("h:i:sa");
		$ip=$_SERVER['REMOTE_ADDR'];

//picture add		
$fn=$_FILES['pic']['name'];
$ft=$_FILES['pic']['type'];
$fs=$_FILES['pic']['size'];
$ftmp=$_FILES['pic']['tmp_name'];
$path="upload/".$fn;


$ln=$_REQUEST['links'];    
$t=$_REQUEST['tags'];

  if(isset($_SESSION['email']))
          { 
			$e=$_SESSION['email'];
          }
		  else
		  {
			$e = "Anonymous";	
		  }


$con=mysqli_connect("localhost","root","","questionera");
$ins="insert into question values('','$c','$qn','$d','$path','$ln','$t','$e','0','$dt','$tm','$ip')";
$res=mysqli_query($con,$ins);
if($res>0)
{   
	move_uploaded_file($ftmp,$path);
	header("location:index.php");
   
 }
else
{	
	echo"Error".mysqli_error($con);
}
mysqli_close($con);

?>