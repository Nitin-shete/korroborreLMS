<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(<?php echo  base_url(); ?>assets/images/img23.jpg);">
				<div class="container holder">
					<div class="align">
						<h1>E-Resources</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="home.html">Home</a></li>
						<li class="active">E-Resources</li>
					</ol>
				</div>
			</nav>
			<!-- two columns -->
			<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article id="content" class="col-xs-12 col-md-9">
						<!-- show head -->
						<header class="show-head">
							<p> Showing 1–9 of 15 results</p>
							<select class="chosen-select-no-single">
								<option value="0">All E-Resources</option>
								<option value="0">All E-Resources</option>
								<option value="0">All E-Resources</option>
								<option value="0">All E-Resources</option>
							</select>
						</header>
						 <!-- include all E-resources -->
						 <?php include("e_resourcesall.php") ?>

						<nav aria-label="Page navigation">
							<!-- pagination -->
							<ul class="pagination">
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>

						
								<li>
									<!-- <a href="#" aria-label="Next"> -->
										<span aria-hidden="true">&rsaquo;</span>
									<!-- </a> -->
								</li>
							</ul>
						</nav>
					</article>
					<!-- sidebar -->
					<aside class="col-xs-12 col-md-3" id="sidebar">
						<!-- widget search -->
						<section class="widget widget_search">
							<h3>E-Resource Search</h3>
							<!-- search form -->
							<form action="#" class="search-form">
								<fieldset>
									<input placeholder=" Search&hellip;" class="form-control" name="s" type="search">
									<button type="button" class="fas fa-search"><span class="sr-only">search</span></button>
								</fieldset>
							</form>
						</section>
						<!-- widget categories -->
						<?php include ("e_resource_categories.php"); ?>
						<!-- widget intro -->
						 <?php include("e_resource_video_intro.php"); ?>
						<!-- widget popular posts -->
						<?php include("populer_e_resources_box.php") ?>
					</aside>
				</div>
			</div>
		</main>