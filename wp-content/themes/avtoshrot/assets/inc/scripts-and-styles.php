<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js', '', '', true);
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'bootstra', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true);
	wp_enqueue_script( 'bootstra' );

	wp_register_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', '', '', true);
	wp_enqueue_script( 'wow' );

	wp_register_script( 'meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', '', '', true);
	wp_enqueue_script( 'meanmenu' );

	wp_register_script( 'carouseljs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', '', '', true);
	wp_enqueue_script( 'carouseljs' );

	wp_register_script( 'scrollUpjs', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', '', '', true);
	wp_enqueue_script( 'scrollUpjs' );

	wp_register_script( 'countdon', get_template_directory_uri() . '/assets/js/countdon.min.js', '', '', true);
	wp_enqueue_script( 'countdon' );	

	wp_register_script( 'price', get_template_directory_uri() . '/assets/js/jquery-price-slider.js', '', '', true);
	wp_enqueue_script( 'price' );

	wp_register_script( 'nivo', get_template_directory_uri() . '/assets/js/jquery.nivo.slider.js', '', '', true);
	wp_enqueue_script( 'nivo' );

	wp_register_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', '', '', true);
	wp_enqueue_script( 'plugins' );

	wp_register_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', '', '', true);
	wp_enqueue_script( 'mainjs' );
	
}

add_action( 'wp_enqueue_scripts', 'inclede_style' );

function inclede_style(){
	wp_register_style( 'font', 'https://fonts.googleapis.com/css?family=Raleway:400,600');
	wp_enqueue_style( 'font' );

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'awesome' );

	wp_register_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style( 'carousel' );

	wp_register_style( 'theme', get_template_directory_uri() . '/assets/css/owl.theme.css');
	wp_enqueue_style( 'theme' );

	wp_register_style( 'transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css');
	wp_enqueue_style( 'transitions' );

	wp_register_style( 'slider', get_template_directory_uri() . '/assets/css/nivo-slider.css');
	wp_enqueue_style( 'slider' );

	wp_register_style( 'ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
	wp_enqueue_style( 'ui' );

	wp_register_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css');
	wp_enqueue_style( 'meanmenu' );

	wp_register_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'animate' );

	wp_register_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'main' );

	wp_register_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'style' );

	wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style( 'responsive' );

	wp_register_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style( 'custom' );


}
?>