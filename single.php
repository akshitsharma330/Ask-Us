<?php    include("header.php");  ?>
 <!-- single -->    
  <div class="single">
<div class="container">           
  <div class="col-md-8 single-left">
                  
  	   <?php                      
			  	    $cname=$_REQUEST['cname'];
			        echo "<h1 style='font-size:70px;font-weight:bolder;'>$cname</h1>"; 
			        echo"<br>";
			      
				    $con=mysqli_connect("localhost","root","","questionera");
					$sel="select * from  category where cname='$_REQUEST[cname]'";
					$run=mysqli_query($con,$sel);
					if($row=mysqli_fetch_array($run))
					{
					  $n=$row['cdetails'];
					  $pic=$row['cpic'];
					}
					  echo"<img src='$pic' class='img-responsive'style='border-radius:15px'/>";
					  echo"<p style='color: black;font-size: 15px'>".$n."</p>";
        ?>
				<!--<div class="admin">
					<div class="admin-left">
						<img src="images/11.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="admin-right">
						<h1><a href="#">Lauda James</a></h1>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure 
							and praising pain was born.</p>
						<a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a>
					</div>
					<div class="clearfix"> </div>
				</div>-->
			<h2 style="font-weight: bolder;">Recent Questions</h2><br>
						   	<?php
					    $cname=$_REQUEST['cname'];
	                    $con=mysqli_connect("localhost","root","","questionera");
						$sel="select * from question where category='$cname'";
						$run=mysqli_query($con,$sel);
						echo "<div class='question' style='color:black'>";
					while($row=mysqli_fetch_array($run))	
					{
							?>
								<div class="row" style="border-radius: 10px;">
									<div class="panel panel-default" style="border-radius: 5px;opacity: 0.7;background-color: white">
									  <div class="panel-heading" style="border-radius: 5px;background-color: white">
									    <span class="panel-title" >
									    		<span style="height:50px;overflow: hidden;font-color:black"><?php echo "<a href='answer.php?qid=$row[qid]&cname=$_REQUEST[cname]' style='color:black'>&nbsp;".$row['qname']."</a>"; ?></span>
									  
									    </span>
									  </div>
									  <div class="panel-body" >
									  	 	<span><?php echo $row['date']; ?> </span>
									  </div>
									 
									</div>
							</div>
							<?php 
						}
						echo "</div>";
					?>
			</div>
			<div class="col-md-4 single-right">
				<!--<form>
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span><input type="text" placeholder="Search..." required=" ">
				</form>
				<div class="footer-top-grid1">
					<h4>Recent Tags</h4>
					<ul class="tag2">
						<li><a href="#">awesome</a></li>
						<li><a href="#">strategy</a></li>
						<li><a href="#">development</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">css</a></li>
						<li><a href="#">photoshop</a></li>
						<li><a href="#">photography</a></li>
						<li><a href="#">html</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">awesome</a></li>
						<li><a href="#">strategy</a></li>
						<li><a href="#">development</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">css</a></li>
						<li><a href="#">photoshop</a></li>
						<li><a href="#">photography</a></li>
						<li><a href="#">html</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">awesome</a></li>
						<li><a href="#">strategy</a></li>
						<li><a href="#">development</a></li>
					</ul>
				</div>--><br><br>
				<div class="recent">

					
					<ul>
						
					
					</ul>
				</div>
			<!--	<div class="categories">
					<h4>Categories</h4>
					<ul>
						<li><a href="#">tempora incidunt ut labore dolore</a></li>
						<li><a href="#">voluptatem quia voluptas sit</a></li>
						<li><a href="#">sed quia consequuntur magni</a></li>
					</ul>
				</div>
				<div class="instagram-feed">
					<h3>Instagram Feed</h3>
					<div class="footer-grid-left">
						<a href="#"><img src="images/4.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/5.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/6.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/7.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/8.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/9.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>-->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->
<?php
    include("footer.php");
 ?>