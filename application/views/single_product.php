	<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(<?php echo  base_url(); ?>assets/images/img23.jpg);">
				<div class="container holder">
					<div class="align">
						<h1>E-Store</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">E-Store</a></li>
						<!-- <li class="active">Yellow Drawing Pencil Set</li> -->
					</ol>
				</div>
			</nav>
			<!-- two columns -->
			<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article id="content" class="col-xs-12 col-md-9">
						<!-- product description column -->
						<div class="product-description-column">
							<div class="alignleft">
								<img src="<?php echo  base_url(); ?>assets/images/img78.jpg" alt="image description">
							</div>
							<div class="descr-wrap">
								<h2>Name of the product</h2>
								<!-- reviews wrap -->
								<div class="reviews-wrap">
									<ul class="star-rating list-unstyled">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="fw-normal font-lato element-block text-small">(5 Customers reviews)</strong>
								</div>
								<!-- price -->
								<strong class="price element-block fw-semi">$99</strong>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
								<strong class="element-block storage-tag text-success fw-normal font-lato">In stock</strong>
								<!-- query wrap -->
								<div class="query-wrap">
									<div class="quantity">
										<input type="number" class="form-control" min="1" value="1">
									</div>
									<a href="#" class="btn btn-warning btn-theme font-lato text-uppercase">Add to cart</a>
								</div>
								<!-- <div class="categories-wrap font-lato">
									<p>Category: <a href="#">Stationary</a>, <a href="#">Notebook</a></p>
									<p>Tags: <a href="#">Pencil</a>, <a href="#">Drawing</a></p>
								</div>
							</div> -->
						</div>
						<!-- pro descr tab list -->
						<ul class="nav nav-tabs pro-descr-tab-list font-roboto" role="tablist">
							<li role="presentation"><a href="#Description" aria-controls="Description" role="tab" data-toggle="tab">Description</a></li>
							<li role="presentation" class="active"><a href="#Reviews" aria-controls="Reviews" role="tab" data-toggle="tab">Reviews (2)</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="Description">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div role="tabpanel" class="tab-pane fade in active" id="Reviews">
								<h4>2 Reviews for Product</h4>
								<ul class="list-unstyled reviewsList">
									<li>
										<div class="alignleft">
											<a href="#"><img src="http://placehold.it/50x50" alt="Lavin Duster"></a>
										</div>
										<div class="description-wrap">
											<div class="descrHead">
												<h3>Reviewer Name &ndash; <time datetime="2011-01-12">May 28, 2021</time></h3>
												<ul class="star-rating list-unstyled justify-end">
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												</ul>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
									</li>
									<li>
										<div class="alignleft">
											<a href="#"><img src="http://placehold.it/50x50" alt="Tim Cook"></a>
										</div>
										<div class="description-wrap">
											<div class="descrHead">
												<h3>Reviewer Name &ndash; <time datetime="2011-01-12">May 28, 2021</time></h3>
												<ul class="star-rating list-unstyled justify-end">
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
													<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												</ul>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
										</div>
									</li>
								</ul>
								<form action="#" class="reviesSubmissionForm">
									<h2 class="text-noCase">Add a Review</h2>
									<p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
									<div class="form-group">
										<span class="formLabel fw-normal font-lato no-shrink">Your Rating</span>
										<ul class="star-rating list-unstyled">
											<li>
												<input id="rate1" class="customFormReset" type="checkbox">
												<label for="rate1" class="fas fa-star"><span class="sr-only">star</span></label>
											</li>
											<li>
												<input id="rate2" class="customFormReset" type="checkbox">
												<label for="rate2" class="fas fa-star"><span class="sr-only">star</span></label>
											</li>
											<li>
												<input id="rate3" class="customFormReset" type="checkbox">
												<label for="rate3" class="fas fa-star"><span class="sr-only">star</span></label>
											</li>
											<li>
												<input id="rate4" class="customFormReset" type="checkbox">
												<label for="rate4" class="fas fa-star"><span class="sr-only">star</span></label>
											</li>
											<li>
												<input id="rate5" class="customFormReset" type="checkbox">
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
										<input id="name" class="form-control element-block" type="text">
									</div>
									<div class="form-group">
										<label for="Email" class="formLabel fw-normal font-lato no-shrink">Email <span class="required">*</span></label>
										<input id="Email" class="form-control element-block" type="email">
									</div>
									<button type="submit" class="btn btn-theme btn-warning text-uppercase font-lato fw-bold">Submit</button>
								</form>
							</div>
						</div> 
						<br><br><br>
						<h1 style="text-align: center;">Related Products</h1><br>
						<div class="row flex-wrap">
							<div class="col-xs-12 col-sm-4 col-md-3">
								<!-- product module -->
								<article class="product-module">
									<div class="aligncenter">
										<a href="#"><img src="<?php echo  base_url(); ?>assets/images/img71.jpg" alt="image description"></a>
									</div>
									<h3 class="fw-semi"><a href="#">Name of the product</a></h3>
									<ul class="star-rating list-unstyled">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="price element-block fw-semi">$99</strong>
									<a href="#" class="btn btn-default font-lato text-uppercase">Add to cart</a>
								</article>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<!-- product module -->
								<article class="product-module">
									<div class="aligncenter">
										<a href="#"><img src="<?php echo  base_url(); ?>assets/images/img72.jpg" alt="image description"></a>
									</div>
									<h3 class="fw-semi"><a href="#">Name of the product</a></h3>
									<ul class="star-rating list-unstyled">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="price element-block fw-semi">$99</strong>
									<a href="#" class="btn btn-default font-lato text-uppercase">Add to cart</a>
								</article>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<article class="product-module">
									<div class="aligncenter">
										<a href="#"><img src="<?php echo  base_url(); ?>assets/images/img73.jpg" alt="image description"></a>
									</div>
									<h3 class="fw-semi"><a href="#">Name of the product</a></h3>
									<ul class="star-rating list-unstyled">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="price element-block fw-semi">$99</strong>
									<a href="#" class="btn btn-default font-lato text-uppercase">Add to cart</a>
								</article>
							</div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
								<article class="product-module">
									<div class="aligncenter">
										<a href="#"><img src="<?php echo  base_url(); ?>assets/images/img70.jpg" alt="image description"></a>
									</div>
									<h3 class="fw-semi"><a href="#">Name of the product</a></h3>
									<ul class="star-rating list-unstyled">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="price element-block fw-semi">$99</strong>
									<a href="#" class="btn btn-default font-lato text-uppercase">Add to cart</a>
								</article>
							</div>

						</div>
					</article>
					<!-- sidebar -->
					<aside class="col-xs-12 col-md-3" id="sidebar">
						<!-- widget search -->
						<section class="widget widget_search">
							<!-- search form -->
							<form action="#" class="search-form">
								<fieldset>
									<input placeholder=" Search&hellip;" class="form-control" name="s" type="search">
									<button type="button" class="fas fa-search"><span class="sr-only">search</span></button>
								</fieldset>
							</form>
						</section>
						<!-- widget categories -->
						<!-- top rating prodect -->
						<section class="widget widget_popular_posts">
							<h3>Top Rated Products</h3>
							<!-- widget cources list -->
							<ul class="widget-cources-list list-unstyled">
								<li>
									<a href="<?php echo  base_url(); ?>card/product">
										<div class="alignleft">
											<img src="<?php echo  base_url(); ?>assets/images/img75.jpg" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Name of the product</h4>
											<ul class="star-rating list-unstyled">
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											</ul>
											<strong class="price text-primary element-block font-lato text-uppercase">$99</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="<?php echo  base_url(); ?>card/product">
										<div class="alignleft">
											<img src="<?php echo  base_url(); ?>assets/images/img76.jpg" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Name of the product</h4>
											<ul class="star-rating list-unstyled">
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											</ul>
											<strong class="price text-primary element-block font-lato text-uppercase">$99</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="<?php echo  base_url(); ?>card/product">
										<div class="alignleft">
											<img src="<?php echo  base_url(); ?>assets/images/img77.jpg" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Name of the product</h4>
											<ul class="star-rating list-unstyled">
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
												<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											</ul>
											<strong class="price text-primary element-block font-lato text-uppercase">$99</strong>
										</div>
									</a>
								</li>
							</ul>
						</section>

						<!-- pricing filter widget -->
						<section class="widget pricing_filter_widget">
							<h3>Pricing Filter</h3>
							<!-- filter ranger form -->
							<form action="#" class="filter-ranger-form">
								<div id="slider-range"></div>
								<input type="hidden" id="amount1" name="amount1">
								<input type="hidden" id="amount2" name="amount2">
								<div class="get-results-wrap">
									<button type="button" class="btn btn-default text-uppercase">Filter</button>
									<p id="amount" class="font-lato"></p>
								</div>
							</form>
						</section>
						<!-- product categarys -->

						<section class="widget widget_categories">
							<h3>Product Categories</h3>
							<ul class="list-unstyled text-capitalize font-lato">
								<li class="cat-item cat-item-1"><a href="#">Category 1</a></li>
								<li class="cat-item active cat-item-2"><a href="#">Category 2</a></li>
								<li class="cat-item cat-item-3"><a href="#">Category 3</a></li>
								<li class="cat-item cat-item-4"><a href="#">Category 4</a></li>
								<li class="cat-item cat-item-5"><a href="#">Category 5</a></li>
							</ul>
						</section>
						
						
					</aside>
				</div>
			</div>
		</main>