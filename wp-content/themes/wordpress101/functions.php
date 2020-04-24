<?php

// Include the Bootstrap Nav Walker Class
require_once 'class-wp-bootstrap-navwalker.php';

// Adding the support to featured image
add_theme_support('post-thumbnails');

/*
** Adding the custom style
*/

function add_custom_style() {
	// Adding the Bootstrap 4 css file
	wp_enqueue_style(
		'bootstrap-css',
		get_template_directory_uri() . '/css/bootstrap.min.css'
	);

	// Adding the fontawesome css file
	wp_enqueue_style(
		'fontawesome-css',
		get_template_directory_uri() . '/css/font-awesome.min.css'
	);

	// Adding the website's Main css file
	wp_enqueue_style(
		'main-css',
		get_template_directory_uri() . '/css/main.css'
	);
}


/*
** Adding the custom script
*/

function add_custom_script() {

	// Remove the registered jquery old version first
	wp_deregister_script('jquery');

	// Then register the wanted version in the footer
	wp_register_script(
		'jquery',
		includes_url('/js/jquery/jquery.js'),
		array(),
		false,
		true);

	// Enqueue the new registered jQuery
	wp_enqueue_script('jquery');

	// Adding the Jquery as a dependency for the Bootstrap but in the head
	wp_enqueue_script(
		'bootstrap-script',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array('jquery'),
		false,
		true
	);

	// Adding the website's Main script file
	wp_enqueue_script(
		'main-script',
		get_template_directory_uri() . '/js/main.js',
		array(),
		false,
		true
	);

	// Adding the html5shiv script file
	wp_enqueue_script(
		'html5shiv',
		get_template_directory_uri() . '/js/html5shiv.min.js'
	);

	// Adding the condition for the html5shiv file
	wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

	// Adding the respond script file
	wp_enqueue_script(
		'respond',
		get_template_directory_uri() . '/js/respond.min.js'
	);

	// Adding the condition for the respond file
	wp_script_add_data('respond', 'conditional', 'lt IE 9');
}

/*
** Adding the Actions to trigger the styles and scripts functions
*/

add_action('wp_enqueue_scripts', 'add_custom_style');
add_action('wp_enqueue_scripts', 'add_custom_script');


/*
** Register a custom menu function
*/

function register_custom_menu() {
	register_nav_menus(array(
		'bootstrap-menu' => 'Navigation Bar Location',
		'footer-menu' => 'Footer Bar Location'
	));
}

/*
** Adding the registered custom menu
*/

add_action('init', 'register_custom_menu');

/*
** Create a function to print the  custom menu
*/


function add_custom_menu() {
	wp_nav_menu(array(
		'theme_location' => 'bootstrap-menu',
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'main-nav',
		'menu_class' => 'navbar-nav ml-auto',
		'depth' => 2,
		'walker' => new WP_Bootstrap_Navwalker()
	));
}

/*
** Create a function to limit the excerpt length && dots
*/

function custom_excerpt_length($length) {
	return 10;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_dots($more) {
	return ' ...';
}

add_filter('excerpt_more', 'custom_excerpt_dots');


?>