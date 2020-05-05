<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('|', 'true', 'right'); bloginfo('name'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="navbar-wrapper navbar-dark bg-dark">
			<div class="container">
				<div class="row">
					<nav class="col navbar navbar-expand-lg">
			  			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
							<?php bloginfo('name'); ?>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
			  			<?php add_custom_menu(); ?>
					</nav>
				</div>
			</div>
		</div>


