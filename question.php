<?php  include("header.php");?>
       <?php 
        //  if(!isset($_SESSION['email']))
        //   {
        //     header("location:usignin.php?msg=Please Login First");
        //   }
       ?>
      <div class="row">
     <div class="col-md-4 col-md-offset-4">
     <h1><u><br>Ask  Question:</u></h1>
     <form action="qsubmit.php?" method="post" enctype="multipart/form-data" >
        <table class="table table-responsive">
    		<tr>
              <td>
        <br>View Categories:</td>
        <td>
             <select name="cname" class="form-control" required="required">
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
    </td>      
            </tr>
            <tr>
    			<td><br>Question Name</td>
    		    <td><input type="text" name="name" required="required" class="form-control"></td>
    		</tr>
    		<tr>
    			<td>Description</td>
    		    <td><textarea name="desc"class="form-control"></textarea></td>
    		</tr>
    		<tr>
    			<td >Pic</td>
    		  <td><input type="file" name="pic" class="form-control"/></td>
    		</tr>
    		<tr>
    			<td>External Links</td>
    		    <td><input type="text" name="links"class="form-control"></td>
    		</tr>
    		<tr>
    	   	<td>Tags</td>
    	   	<td>
                <input type="text" name="tags" class="form-control"> 
            </td>
    	   </tr>
           
           <tr>
           <td></td>
    	   <td><p><input type="submit" name="submit" required="required" class="form-control"></p></td>
    	   </tr>
    </table>
    </form> 
     </div></div>   

</body>
 <?php  include("footer.php");?>