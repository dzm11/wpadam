<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */

// add_action( 'wp_enqueue_scripts', 'wpse_my_style' );
// function wpse_my_style(){
//   wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/dist/style.css' );
// } 

// 	wp_enqueue_style( $handle, $src, $deps, $ver, $media );	
// 	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	/**
 * Proper way to enqueue scripts and styles
 */

// Dołączanie plików CSS/JS
function Guruna_script() {
	wp_enqueue_style('Guruna_font', 'https://use.typekit.net/ber4kre.css');
	wp_enqueue_style('Guruna_style', get_stylesheet_uri(), array(), null, 'all');
	wp_enqueue_script('Guruna_script', get_template_directory_uri() . '/app/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'Guruna_script');
// ------------------------------------------------------------

// Dołączanie miniaturek
add_theme_support( 'post-thumbnails' );
// ------------------------------------------------------------

// Rejestracja Nawigacji
function register_menu() {
    register_nav_menus(array(
        'primary' => 'Nawigacja główna'
    ));
}
add_action('after_setup_theme', 'register_menu');
// ------------------------------------------------------------

?>
