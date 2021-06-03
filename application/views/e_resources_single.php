<!-- contain main informative part of the site -->
		<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(<?php echo  base_url(); ?>assets/images/img23.jpg);">
				<div class="container holder">
					<div class="align">
						<h1> E-Resource Title</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="home.html">Home</a></li>
						<!-- <li><a href="contact.html">Course</a></li> -->
						<li class="active"> E-Resource </li>
					</ol>
				</div>
			</nav>
			<!-- two columns --> 
			<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article id="content" class="col-xs-12 col-md-9">
						<!-- content h1 -->
						<h1 style="text-transform:none;" class="content-h1 fw-semi">Name of the E-Resource</h1>
						<!-- view header -->
						<header class="view-header row">
							<div class="col-xs-12 col-sm-9 d-flex">
								<div class="d-col">
									<!-- post author -->
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="#"><img src="<?php echo  base_url(); ?>assets/images/intr2.png" class="rounded-circle" alt="image description"></a>
										</div>
										<div class="description-wrap">
											<h2 class="author-heading"><a href="<?php echo  base_url(); ?>instructor">Faculty</a></h2>
											<h3 class="author-heading-subtitle text-uppercase">faculty name</h3>
										</div>
									</div>
								</div>
								<div class="d-col">
									<!-- post author -->
									<div class="post-author">
										<div class="alignleft no-shrink icn-wrap">
											<i class="far fa-bookmark"></i>
										</div>
										<div class="description-wrap">
											<h2 class="author-heading"><a href="#">E-Resource Category</a></h2>
											<h3 class="author-heading-subtitle text-uppercase">Category 1</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="rating-holder">
									<ul class="star-rating list-unstyled justify-end">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="element-block text-right subtitle fw-normal">(2 Reviews)</strong>
								</div>
							</div>
						</header>
						
							<?php include("e_resources_descript.php"); ?>

						<h2> Highlights</h2>
						<!-- sectionRow -->
						 <?php  include("e_resources_highlight.php"); ?>
						<!-- bookmarkFoot -->
						<div class="bookmarkFoot">
							<div class="bookmarkCol">
								<ul class="socail-networks list-unstyled">

									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#" ><span class="fab fa-twitter"></span></a></li>
									<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
								    <li><a href="#" class="whatsapp"><span class="fab fa-whatsapp"></span></a></li>
								</ul>
							</div>
							<div class="bookmarkCol text-right">
								<a href="#" style="background-color:#ffc000;" class="btn btn-theme btn-warning text-uppercase fw-bold">Bookmark this E-Resource</a>
							</div>
						</div>
						<h2>About Faculty</h2>
						<!-- instructorInfoBox -->
						<div class="instructorInfoBox">
							<div class="alignleft">
								<a href="#"><img src="<?php echo  base_url(); ?>assets/images/img36.jpg" alt=""></a>
							</div>
							<div class="description-wrap">
								<h3 class="fw-normal"><a href="<?php echo  base_url(); ?>instructor">Faculty Name</a></h3>
								<h4 class="fw-normal">Expertise</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer d.</p>
								<a href="<?php echo  base_url(); ?>instructor" class="btn btn-default font-lato fw-semi text-uppercase">View Profile</a>
							</div>
						</div>
						<h2>Reviews</h2>
						<h3 class="h6 fw-semi">There are 2 reviews on this course</h3>
						<!-- reviewsList -->
						<ul class="list-unstyled reviewsList">
							<li>
								<div class="alignleft">
									<a href="instructor-single.html"><img src="<?php echo  base_url(); ?>assets/images/img37.jpg" alt="Lavin Duster"></a>
								</div>
								<div class="description-wrap">
									<div class="descrHead">
										<h3>Reviewer name – <time datetime="2011-01-12">May 7, 2021</time></h3>
										<ul class="star-rating list-unstyled justify-end">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p><p> but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
								</div>
							</li>
							<li>
								<div class="alignleft">
									<a href="instructor-single.html"><img src="<?php echo  base_url(); ?>assets/images/img38.jpg" alt="Tim Cook"></a>
								</div>
								<div class="description-wrap">
									<div class="descrHead">
										<h3>Reviewer name – <time datetime="2011-01-12">May 7, 2021</time></h3>
										<ul class="star-rating list-unstyled justify-end">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
							</li>
						</ul>
						<!-- reviesSubmissionForm -->
						<form action="#" class="reviesSubmissionForm">
							<h2 class="text-noCase">Add a Review</h2>
							<p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
							<div class="form-group">
								<span class="formLabel fw-normal font-lato no-shrink">Your Rating</span>
								<ul class="star-rating list-unstyled">
									<li>
										<input type="checkbox" id="rate1" class="customFormReset">
										<label for="rate1" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate2" class="customFormReset">
										<label for="rate2" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate3" class="customFormReset">
										<label for="rate3" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate4" class="customFormReset">
										<label for="rate4" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate5" class="customFormReset">
										<label for="rate5" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
								</ul>
							</div>
							<div class="form-group">
								<label for="rview" class="formLabel fw-normal font-lato no-shrink">Your Review <span class="required">*</span></label>
								<textarea id="rview" class="form-control element-block"></textarea>
							</div>
							<div class="form-group">
								<label for="name" class="formLabel fw-normal font-lato no-shrink">Name <span class="required">*</span></label>
								<input type="text" id="name" class="form-control element-block">
							</div>
							<div class="form-group">
								<label for="Email" class="formLabel fw-normal font-lato no-shrink">Email <span class="required">*</span></label>
								<input type="email" id="Email" class="form-control element-block">
							</div>
							<button type="submit" class="btn btn-theme btn-warning text-uppercase font-lato fw-bold">Submit</button>
						</form>
					</article>
					<!-- sidebar -->
					<aside class="col-xs-12 col-md-3" id="sidebar">
						<!-- widget course select -->
						 <?php include("take_e_resource.php"); ?>
						<!-- widget categories -->
						<?php  include("e_resource_categories.php"); ?>
						<!-- widget intro -->
						<?php include("e_resource_video_intro.php"); ?>
						<!-- widget popular posts -->
						<?php  include("populer_e_resources_box.php");?>
						<!-- widget tags -->
						<nav class="widget widget_tags">
							<h3>Tags</h3>
							<!-- tag clouds -->
							<ul class="list-unstyled tag-clouds font-lato">
								<li><a href="#">Tag 1</a></li>
								<li><a href="#">Tag 2</a></li>
								<li><a href="#">Tag 3</a></li>
								<li><a href="#">Tag 4</a></li>
								<li><a href="#">Tag 5</a></li>
							</ul>
						</nav>
					</aside>
				</div>
			</div>
		</main>