<?php

add_theme_support( 'menus' );


// Add Your Menu Locations
function register_my_menus()
{
	register_nav_menus(
	[
		'menu_header'  => 'منوی بالای صفحه',
		'menu_sidebar' => 'منوی نوار کناری',
		'menu_footer'  => 'منوی فوتر',
	]
	);
}
add_action( 'init', 'register_my_menus' );



/**
 * Register our sidebars and widgetized areas.
 *
 */
function theme_widgets_init() {
	register_sidebar( [
		'name'          => 'widget-sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h2>',
	]);

	register_sidebar( [
		'name'          => 'widget-footer-right',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h2>',
	]);

	register_sidebar( [
		'name'          => 'widget-footer-center',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h2>',
	]);

		register_sidebar( [
		'name'          => 'widget-footer-left',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h2>',
	]);
}

add_action( 'widgets_init', 'theme_widgets_init' );



add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status'] );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50 ); // 50 pixels wide by 50 pixels tall, resize mode
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)




// Changing excerpt length
function new_excerpt_length($length) {
return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');


// Changing excerpt more
function new_excerpt_more($more) {
	return '<a href="'. get_permalink() .'"> بیشتر بخوانید...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>