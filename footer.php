<!-- footer -->
<div class="footer">
		
		<div class="footer-grids">
			<div class="col-md-3 footer-grid">
				<p>project for sem7
				<a href="mailto:info@example.com">akshit.sharma1786@gmail.com</a>
				<p>Phone : +91 8837797330</p>
			</div>
			<div class="col-md-3 footer-grid">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="mail.php">Mail Us</a></li>
					<li><a href="usignin.php">Login or Sign Up</a></li>
				</ul>
			</div>
			
			<div class="col-md-3 footer-grid">
				<div class="footer-grid-left">
				   <a class="navbar-brand" href="index.php">AskUs</a>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="footer-copy">
			<p>&copy 2021 AskUs. All rights reserved</p>
			<ul>
				<li><a href="#" class="twitter"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Twitter"></span></a></li>
				<li><a href="#" class="p"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Pinterest"></span></a></li>
				<li><a href="#" class="facebook" id="facebook"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Facebook"></span></a></li>
				<li><a href="#" class="dribble"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Dribbble"></span></a></li>
				<li><a href="#" class="rss"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On RSS"></span></a></li>
				<div class="clearfix"> </div>
			</ul>
			<script>
				$(function () {
				  $('[data-toggle="tooltip"]').tooltip()
				})
			</script>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
								$(document).ready(function() {
									/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/
									
									$().UItoTop({ easingType: 'easeOutQuart' });
									
								});
</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>