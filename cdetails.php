<?php  
	include("header.php");
?>
<body>
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="single">
					<div class="container">
						<div class="col-md-8 ">
							 <h1>
							 	<?php 
							        $cname=$_REQUEST['cname'];
						            echo "$cname";
							     ?>
							</h1>					
								<?php
                                        $cname=$_REQUEST['cname'];
										$con=mysqli_connect("localhost","root","","questionera");
										$ins="select * from category where cname='$_REQUEST[cname]'";
										$run=mysqli_query($con,$ins);
										while($row=mysqli_fetch_array($run))
										{

										echo "<img src='$row[cpic]'class='img-responsive' id='img1'></a>
										";
                                        		/*<div class='col-md-12 banner-bottom-grid'>
					<div class='banner-bottom-grid1' style='background-color: black;border-radius:10px;width: 100%;height: 220px;opacity: 0.7'>
						<div class='banner-bottom-Education'>
							<div class='col-md-4 banner-bottom-grid'>
								<a href='cdetails.php?cname=Education'>
								<div class='banner-bottom-grid1' style='background-color: white;border-radius:20px;width: 200px;height: 160px;opacity: 0.7'>
						              <h1 style='color: black'>Education</h1>
					              </div>
				              </div>
			              </div>
			              </div>
			              </div>
			              */
			

										}
										;
										?> 
								<p> categorey details:
									<i>"All details"</i>
										<span>
											detailsdetailsdetailsdetailsdetailsdetailsdetails
					   					 </span>
					   		    </p>
				    <div>
					                     </div></div></div>
				   	<?php
					    $cname=$_REQUEST['cname'];
	                    $con=mysqli_connect("localhost","root","","questionera");
						$sel="select * from question where category='$cname'";
						$run=mysqli_query($con,$sel);
						echo "<div class='question' style='color:black'>";
					while($row=mysqli_fetch_array($run))	
					{
							?>
							
							
							    <h3 class="panel-title" ><?php echo "<a href='answer.php?qid=$row[qid]&cname=$_REQUEST[cname]' style='color:black'>&nbsp;".$row['qname']."</a>"; ?></h3>
							  </div>
							  <div class="panel-body" >
							  	<span style="height:50px;overflow: hidden;"><?php echo $row['description']; ?></span>
							   	<span><?php echo $row['date']; ?></span>
							   	<span><?php echo "&nbsp;".$row['time'];?></span>
							  </div>
							  <div class="panel-footer" style="border-radius: 20px">
							  		<a href="answer.php?qid=<?php  echo $row['qid']; ?>&cname=<?php echo $_REQUEST['cname'];?>"class="btn btn-primary">Details</a>
							 
							  </div>
							</div>
							</div>
							<?php 
						}
						echo "</div>";
					?>
					</div>
				</div>
				    <div class="col-md-2 single-right">
					</div>
					<div class="recent">
	     	</div>
					
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
		
<?php  include("footer.php");?>
