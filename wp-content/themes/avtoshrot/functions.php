<?php 
require_once("assets/inc/scripts-and-styles.php");

// require_once("assets/inc/bootstrap-menu.php");

add_action('after_setup_theme', 'theme_setup');

function theme_setup(){
   	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	register_nav_menus(array(
		'top'    => 'Top Menu',   

	));
	register_nav_menus(array(
		'topmobile'    => 'Top Menumobile',   

	));
}
function aura_widgets_init_footer() {
    register_sidebar( array(
        'name' => 'sitbarcat',
        'id' => 'sitbarcat',
        'before_widget' => '<ul>',
        'after_widget' => '</ul>'
        
    ) );
       register_sidebar( array(
		'name' => "Правая боковая панель сайта",
		'id' => 'price-sidebar',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );

}
add_action( 'widgets_init', 'aura_widgets_init_footer' );

