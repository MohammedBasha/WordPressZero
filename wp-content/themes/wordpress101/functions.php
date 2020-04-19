/*
** Adding the custom style
*/

function add_custom_style() {
	wp_enqueue_style(
		'custom-bs',
		get_template_directory_uri() . '/css/bootstrap.min.css'
	);
}