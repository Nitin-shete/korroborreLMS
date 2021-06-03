
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- intro block -->
			<section class="intro-block">
				<?php
				include("slider_home.php");
			?>
				<!-- course search aside -->
				<aside class="course-search-aside bg-dark extra-indent">
					<!-- course search form -->
					<form action="#" class="container course-search-form text-center">
						<!-- <strong class="tag-new-text bg-theme element-block text-capitalize font-lato fw-normal"></strong> -->
						<!-- <strong class="tag-new-text bg-theme element-block text-capitalize font-lato fw-normal">Learn New Skills</strong> -->
						
						<div class="form-holder">
							<div class="form-row">
								<div class="form-group">
									<select data-placeholder="Courses" class="chosen-select-no-single">
										<option value="0"></option>
										<option value="0">Courses 1</option>
										<option value="0">Courses 2</option>
										<option value="0">Courses 3</option>
										<option value="0">Courses 4</option>
									</select>
								</div>

								<div class="form-group">
									<select data-placeholder="Pricing" class="chosen-select-no-single">
										<option value="0"></option>
										<option value="0">free</option>
										<option value="0">$50</option>
										<option value="0">$100</option>
										<option value="0">$150</option>
										<option value="0">$200</option>

										  
										

								  </select>
								</div>
									<div class="form-group">
									<select data-placeholder="Search Text" class="chosen-select-no-single">
										<option value="0"></option>
										<option value="0">Search Text</option>
										<option value="0">Search Text</option>
									
									</select>
								</div>
							</div>
							<button type="button" class="btn btn-theme btn-warning no-shrink text-uppercase" style="background-color:#ffc000;">Search</button>
						</div>
						<p>"You can add text here"</p>
					</form>
				</aside>
			</section>
			<!-- courses column aside -->
			<aside class="bg-gray courses-column-aside">
				<div class="container">
					<div class="row holder">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<!-- descr column -->
							<div class="descr-column text-center">
								
								<i class="far fa-bell icn element-block"></i>
								<h3><a href="#">ONLINE COURSES</a></h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<!-- descr column -->
							<div class="descr-column text-center">
								<i class="fas fa-book icn element-block"></i>
								<h3><a href="#">Webinar</a></h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<!-- descr column -->
							<div class="descr-column text-center">
								<i class="far fa-address-card icn element-block"></i>
								<h3><a href="#">GREAT TEACHERS</a></h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<!-- descr column -->
							<div class="descr-column text-center">
<!-- 								<i class="far fa-shopping-cart"></i>
 -->								<i class="fas fa-shopping-cart icn element-block"></i>
								<h3><a href="<?php echo  base_url(); ?>card">E-Store</a></h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<!-- popular posts block -->
			
			<?php include("most_popular_E_resources.php"); ?>
			<!-- categories aside -->
			<aside class="intro-aside bg-cover text-center" style="background-image: url(<?php echo  base_url(); ?>assets/images/img93.jpg);">
				<div class="container holder">
					<h2>Become a <span class="clr">Faculty</span></h2>
					<p>Join thousand of facultys and earn money hassle free!</p>
					<a href="#" class="btn btn-white">Get Started Now</a>
				</div>
			</aside>
			<!-- upcoming events block -->
			
			<?php include("upcoming_course.php") ?>

			
			<aside class="bg-theme aside-note-block text-white">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col">
							<span class="icn-wrap alignleft element-block">
								<img src="<?php echo  base_url(); ?>assets/images/icon10.png" alt="image description">
							</span>
							<div class="descr-wrap">
								<h3>New Student Join Every Week</h3>
								<p><strong class="fw-semi">New courses, interesting posts, popular books and much more!</strong></p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col text-right">
							<a href="#" class="btn btn-white btn-default text-capitalize font-lato fw-normal">Apply Course Now</a>
						</div>
					</div>
				</div>
			</aside>
			<!-- why lms block -->
			 <?php  include("why_lms.php"); ?>

			<!-- counter aside -->
			<?php include("bg_cover.php"); ?>
			<!-- how work block -->
			<section class="container price-block text-center">
				<header class="seperator-head">
					<h2>Pricing Details</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
				</header>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<ul class="list-unstyled price-list">
							<li class="price-heading font-lato fw-semi text-uppercase">Plan 1 </li>
							<li class="icn-wrap rounded-circle"><i class="far fa-user icn"></i></li>
							<li class="price"><strong class="font-lato fw-semi">Free <sup class="fw-noral"></sup></strong></li>
							<li>Feature 1</li>
							<li>Feature 2</li>
							<li>Feature 3</li>
							<li class="btns"><a href="#" class="btn btn-default text-uppercase">Register</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4">
						<ul class="list-unstyled price-list">
							<li class="price-heading font-lato fw-semi text-uppercase">Plan 2</li>
							<li class="icn-wrap rounded-circle"><i class="fas fa-briefcase icn"></i></li>
							<li class="price"><strong class="font-lato fw-semi">$100 <sup class="fw-normal"> /year</sup></strong></li>
							<li>Feature 1</li>
							<li>Feature 2</li>
							<li>Feature 3</li>
							<li class="btns"><a href="#" class="btn btn-default text-uppercase">Register</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4">
						<ul class="list-unstyled price-list">
							<li class="price-heading font-lato fw-semi text-uppercase">plan 3</li>
							<li class="icn-wrap rounded-circle"><i class="fas fa-desktop icn"></i></li>
							<li class="price"><strong class="font-lato fw-semi">$200 <sup class="fw-normal"> /year</sup></strong></li>
							<li>Feature 1</li>
							<li>Feature 2</li>
							<li>Feature 3</li>
							<li class="btns"><a href="#" class="btn btn-default text-uppercase">Register</a></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="partner-block">
				<div class="container">
					<div class="row">
						<header class="col-xs-12 popular-posts-head">
							<h2 class="popular-head-heading">Trusted Partners</h2>
						</header>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<ul class="list-unstyled partner-list">
								<li><a href="#"><img src="<?php echo  base_url(); ?>assets/images/aaa.jpg" alt="partner logo"></a></li>
								<li><a href="#"><img src="<?php echo  base_url(); ?>assets/images/aaa.jpg" alt="partner logo"></a></li>
								<li><a href="#"><img src="<?php echo  base_url(); ?>assets/images/aaa.jpg" alt="partner logo"></a></li>
								<li><a href="#"><img src="<?php echo  base_url(); ?>assets/images/aaa.jpg" alt="partner logo"></a></li>
								<li><a href="#"><img src="<?php echo  base_url(); ?>assets/images/aaa.jpg" alt="partner logo"></a></li>
								<li><a href="#"><img src="<?php echo  base_url(); ?>assets/images/aaa.jpg" alt="partner logo"></a></li>
								


								
							</ul>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- footer area container -->
		