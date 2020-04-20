<?php 

/*
** Adding the custom style
*/

function add_custom_style() {
	wp_enqueue_style(
		'bootstrap-css',
		get_template_directory_uri() . '/css/bootstrap.min.css'
	);

	wp_enqueue_style(
		'fontawesome-css',
		get_template_directory_uri() . '/css/font-awesome.min.css'
	);

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

	wp_enqueue_script(
		'main-script',
		get_template_directory_uri() . '/js/main.js',
		array(),
		false,
		true
	);
}

/*
** Adding the Actions to trigger the styles and scripts functions
*/

add_action('wp_enqueue_scripts', 'add_custom_style');
add_action('wp_enqueue_scripts', 'add_custom_script');

?>