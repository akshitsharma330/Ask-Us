<?php 
				$s=$_REQUEST['signout'];
				$_SESSION['signout']=$s;
		        header("location:index.php");
		?>