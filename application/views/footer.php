

<div class="footer-area bg-dark text-gray">
			<!-- aside -->
			<aside class="aside container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col">
						<div class="logo"><a href="<?php echo  base_url(); ?>welcome"><img src="<?php echo  base_url(); ?>assets/images/kk.png" alt="YOUR LOGO"></a></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
						<a href="#" class="btn btn-default text-uppercase">Start Learning Now</a>
					</div>
					<div class="col-xs-12 col-sm-3 col hidden-xs">
						<!-- populer courses here -->
						 <?php include("populer_courses_box.php"); ?>

					</div>
					<nav class="col-xs-12 col-sm-3 col">
						<h3>Quick Links</h3>
						<!-- fooer navigation -->
						<ul class="fooer-navigation list-unstyled">
							<li><a href="#">Courses 1</a></li>
							<li><a href="#">Courses 2</a></li>

							<li><a href="#">Online Class</a></li>
							<li><a href="#">E-Store</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms and Conditions</a></li>
							<li><a href="#">Login/Register</a></li>
							
						</ul>
					</nav>
					<div class="col-xs-12 col-sm-3 col">
						<h3>contact us</h3>
						<p>If you want to contact us about any issue our support available to help you 8am-7pm Monday to saturday.</p>
						<!-- ft address -->
						<address class="ft-address">
							<dl>
								<dt><span class="fas fa-map-marker"><span class="sr-only">marker</span></span></dt>
								<dd> 497 Evergreen Rd. Roseville,
								CA 95673</dd>
								<dt><span class="fas fa-phone-square"><span class="sr-only">phone</span></span></dt>
								<dd>Call: <a href="tel:+2156237532">+44-345 678 903</a></dd>
								<dt><span class="fas fa-envelope-square"><span class="sr-only">email</span></span></dt>
								<dd>Email: <a href="adobexd@gmail.com">adobexd@gmail.com</a></dd>
							</dl>
						</address>
					</div>
				</div>
			</aside>
			<!-- page footer -->
			<footer id="page-footer" class="font-lato">
				<div class="container">
					<div class="row holder">
						<div class="col-xs-12 col-sm-push-6 col-sm-6">
							<ul class="socail-networks list-unstyled">
								<li><a href="#"><span class="fab fa-facebook"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-pull-6 col-sm-6">
							<p><a href="#">5thdtlms</a> | &copy; 2021 <a href="www.5thdt.com">5thdtlms</a>, All rights reserved</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- back top of the page -->
		<span id="back-top" class="text-center fa fa-caret-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="<?php echo  base_url(); ?>assets/images/svg/hearts.svg" width="100" alt="loader"></div>
		</div>
	</div>

		<!-- login form -->
	
          <?php  
			include 'login.php';
			?>
			<!-- REgister form -->

			 <?php  
			 include 'register.php';
			?> 


	</div>
	<!-- include jQuery -->
	<script src="<?php echo  base_url(); ?>assets/js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="<?php echo  base_url(); ?>assets/js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="<?php echo  base_url(); ?>assets/js/jquery.main.js"></script>
	<!-- include jQuery -->
	<script type="text/javascript" src="<?php echo  base_url(); ?>assets/js/init.js"></script>
</body>
</html>
      
