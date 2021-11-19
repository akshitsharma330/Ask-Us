<?php include("header.php"); ?>
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="col-md-5 contact-left">
				<h1>Address</h1>
				<p>CT Institute of Technology & Research, Maqsudan,
					<span>Jalandhar</span></p>
				<ul>
					<li>Mobile No. :+91 7696067626</li>
									</ul>
			</div>
			<div class="col-md-7 contact-left">
				<h2><u>Contact Form</u></h2>
				<?php  
					 	 if(isset($_REQUEST['msg']))
					    {
                  	 		echo "<h2><div class='alert alert-success'>".$_REQUEST['msg']."</div></h2>";
                        }
					?>
				<form action="msubmit.php" method="post">
					<input type="text" value="Name" name="name"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email"name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Mobile"name="telephone" maxlength="10" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					<textarea type="text" name="message"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<br><br>
					<input type="submit" value="DM on Whatsapp" >
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="contact-bottom">
	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.659421326761!2d75.56055290184057!3d31.35559159103635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a507741d4acab%3A0x7cb0f927bbdbf87f!2sCTITR!5e0!3m2!1sen!2sin!4v1623319625532!5m2!1sen!2sin"oframeborder="0" style="border:0" allowfullscreen></iframe>
	</div>

<?php
     include("footer.php");
 ?>