<?php
//REGISTER MAIN MENU
add_action('init','register_site_menus');
function register_site_menus(){
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
	    'footer-menu' => 'Footer Menu'
    ));
}

function nsphonak_setup() {
	/**
	 * Enable theme support features
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
	 */
	add_theme_support( 'post-thumbnails' );
} // end setup function
add_action( 'after_setup_theme', 'nsphonak_setup' );
function ns_enqueue_scripts() {
	wp_enqueue_script('jquery');
	wp_register_script('nsphonakCustom',get_stylesheet_directory_uri().'/src/custom.js',array('jquery'),'1.0.0',true);
	wp_enqueue_script('nsphonakCustom');
}
add_action('init','ns_enqueue_scripts');
function ns_enqueue_styles() {
	wp_register_style('maincss',get_stylesheet_directory_uri().'/main.css',array('bootstrap'));
  wp_enqueue_style( 'Open Sans Condensed', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700' );
	wp_enqueue_style('maincss');
}
add_action('init','ns_enqueue_styles');

register_sidebar(array(
    'name' => 'Default Sidebar',
    'id' => 'default-sidebar'
));
register_sidebar(array(
    'name' => 'Call To Action',
    'id' => 'call-to-action',
    'before_widget' => '',
    'after_widget'  => '',
));
register_sidebar(array(
    'name' => 'Footer Left',
    'id' => 'footer-left',
    'before_widget' => '',
    'after_widget'  => '',
));
register_sidebar(array(
    'name' => 'Footer Center',
    'id' => 'footer-center',
    'before_widget' => '',
    'after_widget'  => '',
));
register_sidebar(array(
    'name' => 'Footer Right',
    'id' => 'footer-right',
    'before_widget' => '',
    'after_widget'  => '',
));

//include(STYLESHEETPATH.'/admin/customize/customize.php');
include(TEMPLATEPATH.'/admin/theme_options/index.php');
include(TEMPLATEPATH.'/admin/page-meta.php');
include(TEMPLATEPATH.'/admin/additional_functions.php');
include(TEMPLATEPATH.'/admin/custom_shortcodes.php');
include(TEMPLATEPATH.'/admin/social-media.php');

include(TEMPLATEPATH.'/admin/modules/index.php');
include(TEMPLATEPATH.'/admin/control-panel/index.php');
