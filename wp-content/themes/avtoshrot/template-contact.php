<?php /* Template Name:  Template Contact*/ ?>

<?php get_header(); ?>

    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="page-menu">
                        <li><a href="/">Головна</a></li>
                        <li class="active"><a href="#">Контакти</a></li>
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
                <div class="col-md-9">
                    <!-- Start Map area -->
                    <div class="map-area">
                        <div id="googleMap">  <?php the_content( ); ?></div>
                    </div>
                    <!-- End Map area -->
                    <!-- Start Contact-Message -->
                    <div class="contact-message">
                        <fieldset>
                            <?php echo do_shortcode('[contact-form-7 id="205" title="Контактна форма 1"]'); ?>
                        </fieldset>
                    </div>
                    <!-- End Contact-Message -->
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>