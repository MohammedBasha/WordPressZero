

<?php get_header(); ?>


<div class="main-content">
	<div class="container">
		<div class="row">
			<?php
				if (have_posts()) {
					while (have_posts()) {

						the_post();

						get_template_part('content', get_post_format());
						
					}
				}
			?>
		</div>
		<!--
		<div class="row">
			<div class="col-sm-6 prev-link">
			-->
				<?php
				/*
					if (get_previous_posts_link()) {
						previous_posts_link(
							'
								<i class="fa fa-3 fa-chevron-left" aria-hidden="true"></i>
								<span> Previous Page</span>
							'
						);
					} else {
						echo 'No Previous Posts';
					}
				*/
				?>
			<!--
			</div>
			<div class="col-sm-6 text-right prev-link">
			-->
				<?php
				/*
					if (get_next_posts_link()) {
						next_posts_link(
							'
								<span>Next Page </span>
								<i class="fa fa-3 fa-chevron-right" aria-hidden="true"></i>
							'
						);
					} else {
						echo 'No Next Posts';
					}
				*/
				?>
			<!--
			</div>
		</div>
	-->
		<div class="row">
			<div class="col">
				<?php echo numbering_pagination(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
