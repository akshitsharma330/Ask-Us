<?php  include("header.php");?>
       <?php 
         if(!isset($_SESSION['email']))
          {
            header("location:usignin.php?msg=Please Login First");
          }
       ?>
		<div class="banner-bottom-grids">
				<div class="col-md-10 banner-bottom-grid" style="padding-left: 280px">
					<div class="banner-bottom-grid">
							<div class="leave-reply">
					<h2 style="font-size: 50px;color: black">Ask  Question:</h2>
					<form action="qsubmit.php?cname=Gaming" method="post" enctype="multipart/form-data" >
                         <br style="line-height: 40px">&nbsp;Select Category:
						 <select name="cname" class="form-control"  required="required" style="color: black;background-color: lightgrey;width:829px" class="form-control">
             <option disabled="disabled" selected="selected"><i>Categories</i></option>
        <?php
        $con=mysqli_connect("localhost","root","","questionera");
        $sel="select * from category";
        $res=mysqli_query($con,$sel);
        while($row=mysqli_fetch_array($res))
        {
             echo "<option>".$row['cname']."</option>";
        }
        ?>
        </select>       
						<br style="line-height: 25px">
						<input type="text" name="name" placeholder="Question Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Question Name';}" required="required" style="color: black;background-color: lightgrey;width:829px" class="form-control">
						<br style="line-height: 40px">&nbsp;Select Image:<br style="line-height: 25px">
						<input type="file" name="pic" placeholder="Select Pic" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select Pic';}" required="required" style="color: white;background-color: lightgrey" class="form-control">
						<textarea type="text" name="desc" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description of your question...';}" required="" style="color: black;background-color: lightgrey" placeholder=" Provide more Details about your question.."></textarea>
						<input type="submit" value="Submit" >
						<input type="reset" value="Clear" >
					</form>
				</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div><br><br>
        <?php  include("footer.php");?>