<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(http://placehold.it/1920x181);">
				<div class="container holder">
					<div class="align">
						<h1>Webinars</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Webinars</li>
					</ol>
				</div>
			</nav>
			<!-- upcoming events block -->
			<section class="upcoming-events-block container">
				<!-- upcoming events list -->
				<ul class="list-unstyled upcoming-events-list">
					<li>
						<div class="alignright">
							<img src="<?php echo  base_url(); ?>assets/images/webinar_1.jpg" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">09</strong>
								<strong class="month fw-light font-lato">jun</strong>
								<strong class="day fw-light font-lato">WEDNESDAY</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="<?php echo  base_url(); ?>Webinar/details">Webinar Title</a></h3>
							<address><time datetime="2011-01-12">10:00 am - 12:00 pm</time> | Name Of The Guest  </address>
							<a href="<?php echo  base_url(); ?>Webinar/details" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>

					<li>
						<div class="alignright">
							<img src="<?php echo  base_url(); ?>assets/images/webinar_4.jpg" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">16</strong>
								<strong class="month fw-light font-lato">jun</strong>
								<strong class="day fw-light font-lato">WEDNESDAY</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="<?php echo  base_url(); ?>Webinar/details">Webinar Title</a></h3>
							<address><time datetime="2011-01-12">09:00 am - 11:00 pm</time> | Name Of The Guest  </address>
							<a href="<?php echo  base_url(); ?>Webinar/details" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>

					<li>
						<div class="alignright">
							<img src="<?php echo  base_url(); ?>assets/images/webinar_2.jpg" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">11</strong>
								<strong class="month fw-light font-lato">july</strong>
								<strong class="day fw-light font-lato">Friday</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="<?php echo  base_url(); ?>Webinar/details">Webinar Title</a></h3>
							<address><time datetime="2011-01-12">01:00 am - 02:00 pm</time> | Name Of The Guest  </address>
							<a href="<?php echo  base_url(); ?>Webinar/details" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>

					<li>
						<div class="alignright">
							<img src="<?php echo  base_url(); ?>assets/images/webinar_3.jpg" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">18</strong>
								<strong class="month fw-light font-lato">july</strong>
								<strong class="day fw-light font-lato">Saturday</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="<?php echo  base_url(); ?>Webinar/details">Webinar Title</a></h3>
							<address><time datetime="2011-01-12">10:00 am - 12:00 pm</time> | Name Of The Guest  </address>
							<a href="<?php echo  base_url(); ?>Webinar/details" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
				</ul>
				<nav aria-label="Page navigation">
					<!-- pagination -->
					<ul class="pagination">
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">›</span>
							</a>
						</li>
					</ul>
				</nav>
			</section>


        <?php include("webinar_gallery.php"); ?>



						
				</div>

		</main>