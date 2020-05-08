<?php
	
	$all_categories = get_the_category();

?>

<div class="breadcrumbs-holder">
	<div class="container">
		<div class="row">
			<div class="col">
				<ol class="breadcrumb">
					<li>
						<a href="<?php echo get_home_url(); ?>">
							<?php echo get_bloginfo('name'); ?>
						</a>
					</li>
					<li>
						<a href="<?php
							echo esc_url(
								get_category_link($all_categories[0]->term_id)
							);
						?>">
							<?php echo esc_html($all_categories[0]->name); ?>
						</a>
					</li>
					<li class="active">
						<?php echo get_the_title(); ?>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>