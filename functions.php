<?php 
/*
 * Theme update checker
 *
 * @since CHS 1.0
 */
require WP_CONTENT_DIR . '/plugins/plugin-update-checker-master/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/csd509j/CorvallisHighSchool',
	__FILE__,
	'CorvallisHighSchool'
);

$myUpdateChecker->setBranch('master'); 

/*
 * Setup style sheets
 *
 * @since chs 1.0
 */
function chs_theme_enqueue_styles() {
    
	$parent_style = 'csdschools';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'chs-style',
	    get_stylesheet_directory_uri() . '/style.css',
	    array( $parent_style ),
	    wp_get_theme()->get('Version')
	);

}
add_action( 'wp_enqueue_scripts', 'chs_theme_enqueue_styles' );