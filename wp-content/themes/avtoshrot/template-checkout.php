<?php /* Template Name:  Template Checkout*/ ?>


<?php get_header(); ?>

	<section class="page-content">
		<div class="container">
            <div class="row">
				<div class="col-md-12">
					<ul class="page-menu">
						<li><a href="/">Головна</a></li>
						<li class="active"><a href="#">Оформлення замовлення</a></li>
					</ul>
				</div>
			</div>
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
			                    				<h5><a href="<?php the_permalink(); ?>" class="recent-posts-title">тутт буде щось про новини</a></h5>
			                    				<span class="recent-posts-date"><?php echo get_the_date('M d, Y'); ?> | <?php the_title(); ?></span>
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
				<div class="col-md-9 col-xs-12">
					<!-- START PRODUCT-BANNER -->
					<div class="product-banner">
						<div class="row">
							<div class="col-xs-12">
								<div class="banner">
									<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/banners/2logo.jpg" alt="Product Banner"></a>
								</div>
							</div>
						</div>
					</div>
					<!-- END PRODUCT-BANNER -->
					<!-- START PRODUCT-AREA -->
					<div class="product-area">
						<div class="row">
							<div class="col-xs-12">
								<!-- Start Product-Menu -->
								<div class="product-menu">
									<div class="product-title">
										<h3 class="title-group-3 gfont-1">Оформлення замовлення</h3>
									</div>
								</div>
								<div class="product-filter">
									<ul role="tablist">
										<li role="presentation" class="list">
											<a href="#display-1-1" role="tab" data-toggle="tab"></a>
										</li>
										<li role="presentation"  class="grid active">
											<a href="#display-1-2" role="tab" data-toggle="tab"></a>
										</li>
									</ul>

								</div>
								
								<!-- End Product-Menu -->
								<div class="clear"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12">		
								<!-- Start Product -->
								<div class="product">
									<?php the_content( ); ?>

								</div>
								<!-- End Product -->
							</div>
						</div>
					</div>
					<!-- END PRODUCT-AREA -->
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>