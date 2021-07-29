<?php get_header(); 
	the_post();?>
    <section class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="page-menu">
                            <li><a href="/">Головна</a></li>
                            <li class="active"><?php echo get_the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Start About-Area -->
            <div class="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="f-title text-center">
                                <h3 class="title text-uppercase"><?php echo get_the_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="img-element">
                                <img src="<?php the_post_thumbnail_url('blogMainPage') ?>" alt="Recent Posts">
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <div class="about-page-cntent">
                                <?php the_content( ); ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           <div class="shop-blog-area sidebar">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-group border-red gfont-1">Інші новини </h3>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1; 
                        $args = [
                            'post_type' => 'post',
                            'publish'           => true,
                            'posts_per_page' => 4,
                            'paged'           => $paged, 
                        ];      
                        $query = new WP_Query($args);
                    ?>
                    <div class="">
                        <?php 
                            while($query->have_posts()){ 
                            $query->the_post(); 
                        ?>
                        <div class="col-md-3">
                            <div class="">
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
            <!-- End About-Area -->
        </section>

<?php get_footer(); ?>