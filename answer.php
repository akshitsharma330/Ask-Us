<?php  include("header.php");?>
<?php 
        //  if(!isset($_SESSION['email']))
        //   {
        //     header("location:usignin.php?msg=Please Login First");
        //   }
       ?>   
      <br><br><br><br>
     <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <br>
        <form action="asubmit.php?x=qid" method="get">
       
        <?php
               // $e=$_SESSION['email'];
                $qid=$_REQUEST['qid'];
                $cname=$_REQUEST['cname'];
                $_SESSION['qid']=$qid;
                $_SESSION['cname']=$cname;
                $con=mysqli_connect("localhost","root","","questionera");
                $sel="select * from question where qid='$qid'";
                $run=mysqli_query($con,$sel);
                 echo "<div class='answer'>";
                   while($row=mysqli_fetch_array($run))  
                     {
                        echo "<div class='row'>";
                        echo "Questioned in <b>".$row['category']."&nbsp;</b>";
                        echo"by: ".$row['email'];
                         echo"<br><i>&nbsp;".$row['date']."&nbsp;";
                        echo "&nbsp;".$row['time']."</i><br>";
                        echo "<br><br><h2>".$row['qname']."</h2>";
                        ?>
                      &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $row['pic'];?>"height="300px"/>     <br>              
                    <?php 
                        echo "<br><b>Description: </b>".$row['description']."<br>";                       
                        echo "<b>Links:</b> ".$row['link']."</i><br>";
                        echo "<b>Tags:</b> ".$row['tags']."</i><br>";
                        echo "</div>";
                        echo"<br><br>";
                     }
                 echo "</div>";
          ?>  
       <?php
            echo"<h1>Answers:</h1>";
            $cname=$_REQUEST['cname'];
            $qid =$_REQUEST['qid'];
            $con=mysqli_connect("localhost","root","","questionera");
            $sel="select * from answer where cname='$cname'and qid ='$qid'";
            $run=mysqli_query($con,$sel);
              while($row=mysqli_fetch_array($run))  
            {
               echo "<div class='question'style='border:3px solid black; padding:25px'>";
               echo "<div class='row'>";
               echo "<i style='color:red'>Answered In</i><b style='color:blue'>&nbsp;".$row['cname']."</b>&nbsp;</i>:";
               echo"by:".$row['email'];
               echo "<br>".$row['answer']."<br>";
               echo "<br>".$row['links'];
               echo"<br>".$row['date']."&nbsp;";
               echo "<br>".$row['time']."<br>";
               echo "</div>";
               echo "</div>";
               echo"<br><br>";
            }
        ?> 
         <h4><u><br>Your Answer</u></h4><br>
        	<table class="table table-responsive">
            		<tr>
            			<td>Your Answer</td>
                        <td><textarea name="answer"class="form-control"></textarea></td>
            		</tr>
            	     <tr>
                      <td>
                          External Links
                      </td>
                      <td><input type="text" name="links"class="form-control"   ></td>   
                     </tr>
                     <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit"class="form-control"></td>
            	     <td>
                        <input type="reset" name="reset" value="Reset"class="form-control"></td>
            	   </tr>
                </table>
            </form>
       </div>
     </div> 
   
 
    
</body>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=pfsi8oxzkge6r4ypp91ff3uj1ancd985dcr44lszedzf4y7b"></script>
<script>
  tinymce.init({
   selector: "textarea",
   plugins: "a11ychecker, advcode, linkchecker, media mediaembed, powerpaste, tinymcespellchecker",
   toolbar: "a11ycheck, code"
});
</script>

<?php  include("footer.php");?>