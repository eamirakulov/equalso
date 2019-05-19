<?php

/**
 * Returns page/post slug
 */
function the_slug()
{
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'].'_page';
	return $slug;
}
/**
 * Returns part of string
 */
function excerpt($str, $length = 500, $trailing = '...')
{
	$str = strip_tags($str);
	$length -= mb_strlen($trailing);
	if(mb_strlen($str)> $length)
		return mb_substr($str, 0, $length).$trailing;
	else 
		return $str;
}

/**
 * Add menu
 */
add_theme_support( 'menus' );

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'header-menu' => 'Header Menu',
			'footer-menu-1' => 'Footer 1',
			'footer-menu-2' => 'Footer 2',
			'footer-menu-3' => 'Footer 3'
		)
	);
}
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Social',
		'id'            => 'footer_social',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );
	register_sidebar( array(
		'name'          => 'Mobile Social',
		'id'            => 'mobile_social',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );
	register_sidebar( array(
		'name'          => 'People hire trainers',
		'id'            => 'global_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );

//add_action( 'init', 'create_post_type' );
//function create_post_type() {
//	register_post_type( 'test',
//		array(
//			'labels' => array(
//				'name' => __( 'Test' ),
//				'singular_name' => __( 'Test' )
//			),
//		'public' => true,
//		'has_archive' => true,
//		'supports' => array( 'title', 'editor') 
//		)
//	);
//}

