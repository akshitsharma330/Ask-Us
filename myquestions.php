<?php 
 include("header.php");
    if(isset($_SESSION['email']))
    {
?>
  
  <div class="row">
            <div class="col-md-6 offset-md-6" style="border:50px solid orange">
            <h1 align="center">Questions</h1>	
            <?php
                  $e=$_SESSION['email'];
                  $sel="select * from question where email='$e'";
				  $run=mysqli_query($con,$sel);
				  echo "<div class='question' style='color:black'>";
					while($row=mysqli_fetch_array($run))	
					  {
				?>
						<div class="row">
						    <div class="panel panel-default">
							    <div class="panel-heading">
							      	<h3 class="panel-title">
							      		<?php echo "<a href='answer.php' style='color:black'>&nbsp;".$row['qname']."</a>";?></h3>
							    </div>
							         <div class="panel-body">
							  	        <span style="height:50px;overflow: hidden;"><?php echo $row['description']; ?></span>
							   	        <span><?php echo $row['date']; ?></span>
							   	        <span><?php echo $row['time']; ?></span>
							         </div>
							          
							</div>
						</div>
            	 <?php
            	      }
            	?>
            </div>
     </div>                
                          <div class="col-md-6 offset-md-6" style="border:50px solid red">
                           <h1 align="center">Answers</h1>
                                      <?php
                  $e=$_SESSION['email'];
                  $sel="select * from answer where email='$e'";
				  $run=mysqli_query($con,$sel);
				  echo "<div class='question' style='color:black'>";
					while($row=mysqli_fetch_array($run))	
					  {
				?>
						<div class="row">
						    <div class="panel panel-default">
							    <div class="panel-heading">
							      	<h3 class="panel-title">
							      		<?php echo "<a href='answer.php' style='color:black'>&nbsp;".$row['answer']."</a>";?></h3>
							    </div>
							         <div class="panel-body">
							  	        
							   	        <span><?php echo $row['date']; ?></span>
							   	        <span><?php echo $row['time']; ?></span>
							         </div>
							          
							</div>
						</div>
            	 <?php
            	      }
            	?>
            </div>
     </div>
                           </div>
  </div>              

<?php
}
   else
   { 
     header("usignin.php");  
   }
 include("footer.php");
?>