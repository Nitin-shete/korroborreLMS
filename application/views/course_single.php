<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(http://placehold.it/1920x181);">
				<div class="container holder">
					<div class="align">
						<h1>Course</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<!-- <li><a href="event-sigle.html">Events</a></li> -->
						<li class="active">Course</li>
					</ol>
				</div>
			</nav>
			<!-- two columns -->
			<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article id="content" class="col-xs-12 col-md-9">
						<!-- visualImageHolder -->
						<div class="aligncenter visualImageHolder">
							<img src="<?php echo  base_url(); ?>assets/images/online_course.png" alt="image description">
							<!-- captionAddress -->
							<address class="captionAddress bg-theme">
								<div class="addressColumn">
									<i class="far fa-clock icn text-white"></i>
									<strong class="title text-uppercase fw-semi element-block">Start Date :</strong>
									<strong class="fw-normal element-block"><time datetime="2011-01-12">Start Time</time></strong>
								</div>
								<div class="addressColumn">
									<i class="far fa-flag icn text-white"></i>
									<strong class="title text-uppercase fw-semi element-block">End Date :</strong>
									<strong class="fw-normal element-block"><time datetime="2011-01-12">Finish Time</time></strong>
								</div>
								<div class="addressColumn">
									<i class="fas fa-map-marker-alt icn text-white"></i>
									<strong class="title text-uppercase fw-semi element-block">Faculty</strong>
									<strong class="fw-normal element-block">Faculty Name</strong>
								</div>
							</address>
						</div>



                     <!-- ticketsInfoAside -->
						<aside class="ticketsInfoAside bg-dark"> 
							<!-- ticketsInfoList -->
							<!-- <div id="defaultCountdown" class="comming-timer"></div> -->
							<div></div>
							 <a href="#" class="btn btn-default btn-white text-uppercase fw-bold font-lato">Register Here</a> 
						</aside> 


						<h1 style="text-transform:none;">Name of the course</h1>

						<h3 class="content-h3"> Description</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p><p> but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
						<h3 class="content-h3">What you will learn</h3>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, .</p>
						<ul class="listDefault list-unstyled">
							<li>making this the first true generator on the Internet</li>
							<li>It uses a dictionary of over 200 Latin words,</li>
							<li>combined with a handful of model sentence structures,.</li>
						</ul>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many!</p>
						<h2> Highlights</h2>
						<!-- sectionRow -->
						<?php include("course_highlight.php"); ?>
						<!-- bookmarkFoot -->
						<div class="bookmarkFoot">
							<div class="bookmarkCol">
								<ul class="socail-networks list-unstyled">

									<li><a href="#" ><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#" ><span class="fab fa-twitter"></span></a></li>
									
									<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
								    <li><a href="#" class="whatsapp"><span class="fab fa-whatsapp"></span></a></li>
								</ul>
							</div>
							<div class="bookmarkCol text-right">
								<a href="#" style="background-color:#ffc000;" class="btn btn-theme btn-warning text-uppercase fw-bold">Bookmark this course</a>
							</div>
						</div>
						<h2>About Faculty</h2>
						<!-- instructorInfoBox -->
						<div class="instructorInfoBox">
							<div class="alignleft">
								<a href="#"><img src="<?php echo  base_url(); ?>assets/images/img38.jpg" alt=""></a>
							</div>
							<div class="description-wrap">
								<h3 class="fw-normal"><a href="<?php echo  base_url(); ?>instructor">Faculty Name</a></h3>
								<h4 class="fw-normal">Expertise</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer d.</p>
								<a href="<?php echo  base_url(); ?>instructor" class="btn btn-default font-lato fw-semi text-uppercase">View Profile</a>
							</div>
						</div>
					</article>
					<!-- sidebar -->
					<aside class="col-xs-12 col-md-3" id="sidebar">
						<!-- widget course select -->
						<?php  include("take_course.php"); ?>
						<!-- widget categories -->
						<?php  include("course_categories.php"); ?>
						<!-- widget intro -->
						<?php  include("course_intro_video.php"); ?>
						<!-- widget popular posts -->
						<?php include ("populer_courses_box.php"); ?>
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