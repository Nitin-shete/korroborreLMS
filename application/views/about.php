<!-- contain main informative part of the site -->
		


		<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(<?php echo  base_url(); ?>assets/images/img23.jpg);">
				<div class="container holder">
					<div class="align">
						<h1 style="text-transform:none;" >About us</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="home.html">Home</a></li>
						<li class="active">About us</li>
					</ol>
				</div>
			</nav>
			<!-- text info block -->
			<article class="container text-info-block">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<h1>What is Lorem Ipsum?.</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text, </p>
						<ul class="list-unstyled listDefault">
							<li>It has survived not only five centuries, but also the leap into electronic typesetting</li>
							<li>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</li>
							<li>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</li>
							<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6">
						<img src="<?php echo  base_url(); ?>assets/images/img56.jpg" class="element-block image"  alt="image description">
					</div>
				</div>
			</article>
			<!-- counter aside -->
			<?php include("bg_cover.php"); ?>
			<!-- why lms block -->
			<?php  include("why_lms.php"); ?>
			<!-- professionals block -->
			<?php include("our_faculty.php");  ?>
		</main>