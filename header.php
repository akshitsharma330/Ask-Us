<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet" type='text/css'>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style >
	body
	{
		background-image: url("images/bk.jpg");
		background-attachment: fixed;
	}
	.carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:570px;
  }
 

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: fixed;
    background-color: #ffffff;
    width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.desc {
    padding: 5px;
    text-align: center;
}
</style>
</head>
<body>
	<div class="header" style="background:#164A41; font-family:Mochiy Pop One , sans-serif;">
		<div class="container" style="background:#164A41;">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="loo">
						<br><a class="navbar-brand" href="index.php"><font color="#F1B24A" style="font-size:75px ; font-family:Mochiy Pop One , sans-serif;">A</font><font color="skyblue" style="font-family:Mochiy Pop One , sans-serif;">sk-Us</font></a>
					</div>
				</div>
                <br>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-5" id="cl-effect-5">
						<ul class="nav navbar-nav">
						<?php if(!isset($_SESSION['email']))
						{
						?>
							<!-- navigation bar -->
				
							<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
						    <li><a href="question.php"><span data-hover="AskUs">AskUs</span></a></li>
						    <li><a href="mail.php"><span data-hover="Contact Us">Contact Us</span></a></li>
			                <li><a href="usignin.php"><span data-hover="Sign In">Sign In</span></a></li>  
			                <br><br>
					  <?php
							}
							else
							{
                       ?>                              
								<head>
							       <style>
								     #signinimg { border-radius: 50%; }
								   </style>
								</head>
								<body>
									<?php
											$con=mysqli_connect("localhost","root","","questionera");
											$ins="select * from user where email='$_SESSION[email]'";
											$run=mysqli_query($con,$ins);
											while($row=mysqli_fetch_array($run))
											{
	                                      
											
											
											
									?> 
								</body>



                               <li><br><a href="index.php"><span data-hover="Home">Home</span></a></li>
						        <li><br><a href="question.php"><span data-hover="AskUssdgs">AskUsgsdg</span></a></li>
						        <li><br><a href="mail.php"><span data-hover="Contact Us">Contact Us</span></a></li>
						       <li><ul><div class="dropdown">
	<?php 
                                   echo "<img src='$row[pic]' alt='Avatar'style='width:70px;height:75px' id='signinimg'>";?>
										  
										  <div class="dropdown-content">
										      					<?php 
										      						  echo "<img src='$row[pic]' alt='Avatar'width='300' height='200' class='img-responsive'>" ;?>
										  
										      						                              
										    <div class="desc"><?php echo"<b>$row[name]</b>";?></div>
										  </div>
										</div></ul></li>

						       	<li class="dropdown">
							        <br/><a class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Profile">Profile</span><span class="caret"></a>
							        <ul class="dropdown-menu">
							        	<li><ul><a href="eusignup.php">Edit Profile</a></ul></li>
							        	<!-- <li><ul><a href="myquestions.php">My Questions</a></ul></li> -->
							        	<li><ul><a href="signout.php">Sign Out</a></ul></li>
							        </ul>
						       	</li>
										<?php
									echo	"<br><br>";
										}
										        ?>
						        
						     	<br><br>
                            <?php
					    	 }
                            ?></span></a>
                          </ul>
					</nav>
				</div>
			</nav>
		</div>
	</div></li>
</span></a></li></ul>
