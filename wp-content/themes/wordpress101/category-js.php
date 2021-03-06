

<?php get_header(); ?>


<div class="main-content page-category">
	<div class="container">
		<div class="row text-center">
			<h1 class="col-12 category-header">
				<?php single_cat_title(); ?>
			</h1>
			<div class="col-12 category-description">
				<?php echo category_description(); ?>
			</div>
			<div class="col-12 category-states">
				<span>Articles count: </span>
				<span>Comments count: </span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 category-side">
				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post();

							?>
							<div class="col-sm-6">
								<div class="main-post">
									<h3 class="post-title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="post-info">
										<span class="post-author">
											<i class="fa fa-user" aria-hidden="true"></i>
											<?php the_author_posts_link(); ?>
										</span>
										<span class="post-date">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<?php the_time('F j, Y'); ?>
										</span>
										<span class="post-comments">
											<i class="fa fa-comment" aria-hidden="true"></i>
											<?php comments_popup_link(
												'No comments',
												'1 comment',
												'% comments',
												'comment-url',
												'Comments disabled'
											); ?>
										</span>
									</div>
									<a href="<?php the_permalink(); ?>"
										title="<?php the_title_attribute(); ?>"
										class="post-image">
										<?php the_post_thumbnail(
											'',
											[
												'class' => 'img-responsive img-thumbnail'
											]
										); ?>
									</a>
									<p class="post-desc">
										<?php
											//the_content('Continue reading ' . get_the_title());
											the_excerpt();
										?>
										<a href="<?php the_permalink(); ?>">
											<?php the_title('Read '); ?>
										</a>
									</p>
									<hr />
									<p class="post-categories">
										<i class="fa fa-tags" aria-hidden="true"></i>
										<?php the_category(', '); ?>
									</p>
									<p class="post-tags">
										<i class="fa fa-tag" aria-hidden="true"></i>
										<?php
											if (has_tag()) {
												the_tags();
											} else {
												echo 'No Tags';
											}
										?>
									</p>
								</div>
							</div>

							<?php
						}
					}
				?>
			</div>
			<div class="col-md-3 sidebar">
				<?php

					get_sidebar('js');

					if (is_active_sidebar('main-sidebar')) {
						dynamic_sidebar('main-sidebar');
					} else {
						echo '<p>Sidebare Goes Here.</p>';
					}
				?>
			</div>
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
