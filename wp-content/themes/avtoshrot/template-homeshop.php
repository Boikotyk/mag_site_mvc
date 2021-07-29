<?php /* Template Name:  Template Home Shop*/ ?>

<?php get_header(); ?>

		<div class="category-slider-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                    <div class="left-category-menu hidden-sm hidden-xs">
	                        <div class="left-product-cat">
	                            <div class="category-heading">
	                                <h2>Категорії</h2>
	                            </div>
	                            <div class="category-menu-list">
	                                <?php dynamic_sidebar('sitbarcat');?>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END CATEGORY-MENU-LIST -->
	                    <!-- START RECENT-POSTS -->
	                    <div class="shop-blog-area sidebar">
	                    	<div class="row">
	                    		<div class="col-md-12">
	                    			<h3 class="title-group border-red gfont-1"> Останні новини </h3>
	                    		</div>
	                    	</div>
	                    	<div class="row">
	                    		<?php 
					                $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1; 
					                $args = [
					                    'post_type' => 'post',
					                    'publish'           => true,
					                    'posts_per_page' => 2,
					                    'paged'           => $paged, 
					                ];      
					                $query = new WP_Query($args);
					            ?>
		                    	<div class="active-recent-posts carosel-circle">
		                    		<?php 
					                    while($query->have_posts()){ 
					                    $query->the_post(); 
					                ?>
		                    		<div class="col-xs-12">
			                    		<div class="single-recent-posts">
			                    			<div class="recent-posts-photo">
			                    				<img src="<?php the_post_thumbnail_url('blogMainPage') ?>" alt="Recent Posts">
			                    			</div>
			                    			<div class="recent-posts-text">
			                    				<h5><a href="<?php the_permalink(); ?>" class="recent-posts-title"><?php the_title(); ?></a></h5>
			                    				<span class="recent-posts-date"><?php echo get_the_date('M d, Y'); ?> </span>
			                    				<p class="posts-short-brif"><?php echo get_the_excerpt(); ?></p>
			                    				<a href="<?php the_permalink(); ?>" class="posts-read-more">Читати далі ...</a>
			                    			</div>
			                    		</div>
		                    		</div>
		                    	<?php } ?> 
		                    	</div>
		                    	<?php 
					                wp_reset_query();
					            ?> 

	                    	</div>
	                    </div>
	                    <!-- END RECENT-POSTS -->
	                </div>
	                <div class="col-md-9">
                		<!-- slider -->
						<div class="slider-area">
							<div class="bend niceties preview-1">
								<div id="ensign-nivoslider" class="slides">	
									<img src="<?php echo get_template_directory_uri();?>/assets/img/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1"/>
				 					<img src="<?php echo get_template_directory_uri();?>/assets/img/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2"/>
								</div>
								<!-- direction 1 -->
								<div id="slider-direction-1" class="t-lfr slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-1-1 ">
										<h1 class="title1">Допоможемо, якщо завітаєш</h1>
									</div>
								</div>
							</div>
						</div>
						<!-- slider end-->
												<!-- START PRODUCT-BANNER -->
						<div class="product-banner home1-banner">
							<div class="row">
								<div class="col-md-6 ">
									<div class="single-product-banner">
										<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/banners/12.jpg" alt="Product Banner"></a>
										<div class="banner-text banner-1">
										</div>
									</div>
								</div>
								<div class="col-md-6 ">
									<div class="single-product-banner">
										<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/banners/2.jpg" alt="Product Banner"></a>
										<div class="banner-text banner-2">

										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="small-product-area">
							<!-- Start Product-Menu -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product-menu">
										<ul role="tablist">
										    <li role="presentation" class=" active"><a href="#display-4-1" role="tab" data-toggle="tab">Останні добавлені</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Product-Menu -->
							<!-- Start Product -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product carosel-navigation">
										<div class="tab-content">
											<!-- Product = display-4-1 -->
											<div role="tabpanel" class="tab-pane fade in active" id="display-4-1">
												<div class="row">
													<div class="active-small-product">
														<?php echo do_shortcode('[recent_products per_page="4" columns="4"]'); ?>
													</div>
												</div>
											</div>
											<!-- End Product = display-4-1 -->
										</div>
									</div>									
								</div>
							</div>
							<!-- End Product -->
						</div>
						<!-- END PRODUCT-AREA (1) -->
						<!-- START PRODUCT-BANNER -->
						<div class="product-banner">
							<div class="row">
								<div class="col-md-6 ">
									<div class="single-product-banner">
										<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/banners/3.jpg" alt="Product Banner"></a>
										<div class="banner-text banner-1">
										</div>
									</div>
								</div>
								<div class="col-md-6 ">
									<div class="single-product-banner">
										<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/banners/5.jpg" alt="Product Banner"></a>
										<div class="banner-text banner-2">
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END PRODUCT-BANNER -->
						<!-- START  -->
						<!-- START SMALL-PRODUCT-AREA (1) -->
						<div class="small-product-area">
							<!-- Start Product-Menu -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product-menu">
										<ul role="tablist">
										    <li role="presentation" class=" active"><a href="#display-4-2" role="tab" data-toggle="tab">Товари зі знижкою</a></li>
										    
										</ul>
									</div>
								</div>
							</div>
							<!-- End Product-Menu -->
							<!-- Start Product -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product carosel-navigation">
										<div class="tab-content">
											<!-- Start Product = display-4-2 -->
											<div role="tabpanel" class="tab-pane fade in active" id="display-4-2">
												<div class="row">
													<div class="active-small-product">
														<?php echo do_shortcode('[sale_products per_page="4" columns="4"]'); ?>
													</div>
												</div>
											</div>
											<!-- End Product = display-4-2 -->
											
										</div>
									</div>									
								</div>
							</div>
							<!-- End Product -->
						</div>
						<div class="small-product-area">
							<!-- Start Product-Menu -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product-menu">
										<ul role="tablist">
										    <li role="presentation" class=" active"><a href="#display-4-3"  role="tab" data-toggle="tab">Рекомендовані товари</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Product-Menu -->
							<!-- Start Product -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product carosel-navigation">
										<div class="tab-content">
											
											<!-- Start Product = display-4-3 -->
											<div role="tabpanel" class="tab-pane fade in active" id="display-4-3">
												<div class="row">
													<div class="active-small-product">
														<?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
													</div>
												</div>
											</div>
											<!-- End Product = display-4-3 -->
										</div>
									</div>									
								</div>
							</div>
							<!-- End Product -->
						</div>
						<!-- END SMALL-PRODUCT-AREA (1) -->
	                </div>
	            </div>
			</div>
		</div>
		<!-- Category slider area End -->		




<?php get_footer(); ?>