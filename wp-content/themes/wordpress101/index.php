

<?php get_header(); ?>


<div class="container">
	<div class="row">
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
									the_content('Continue reading ' . get_the_title());
								?>
							</p>
							<hr />
							<p class="post-categories">
								<i class="fa fa-tags" aria-hidden="true"></i>
								<?php the_category(', '); ?>
							</p>
						</div>
					</div>

					<?php
				}
			}
		?>

		
	</div>
</div>

<?php get_footer(); ?>
