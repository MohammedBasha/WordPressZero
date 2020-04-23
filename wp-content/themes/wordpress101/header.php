<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
		<h1>From Header</h1>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container">
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
				<?php bloginfo('name'); ?>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php add_custom_menu(); ?>

		  </div>
		</nav>


