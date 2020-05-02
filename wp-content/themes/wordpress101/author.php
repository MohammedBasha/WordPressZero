<div class="author-page">

	<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<h1 class="col-md-12 profile-header text-center">
				<?php the_author_meta('nickname'); ?> Page
			</h1>
			<div class="col-md-3">
				<?php
					$avatar_arguments = [
						'class' => 'img-responsive img-thumbnail'
					];

					echo get_avatar(
						get_the_author_meta('ID'),
						196,
						'',
						'User Profile',
						$avatar_arguments
					);
				?>
			</div>
			<div class="col-md-9">
				<ul class="list-unstyled">
					<li>First Name: <?php the_author_meta('first_name'); ?></li>
					<li>Last Name: <?php the_author_meta('last_name'); ?></li>
					<li>Nickname: <?php the_author_meta('nickname'); ?></li>
				</ul>
				<hr>
				<?php
					if (get_the_author_meta('description')) {
							the_author_meta('description');
					} else {
						echo "There's no bio for ";
				?>
				<?php
						the_author_meta('first_name');
					}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>Posts Count:</p>
				<p>
					<?php echo count_user_posts(get_the_author_meta('ID')); ?>
				</p>
			</div>
			<div class="col">
				<p>Comments Count:</p>
				<p>
					<?php
						$commentscount_arguments = [
							'user_id' => get_the_author_meta('ID'),
							'count' => true
						];

						echo get_comments($commentscount_arguments);
					?>
				</p>
			</div>
			<div class="col">
				<p>Total Posts View:</p>
				<p></p>
			</div>
			<div class="col">
				<p>Testing</p>
				<p></p>
			</div>
		</div>
		<div class="row">
			<?php
				if (have_posts()) {
			?>
				
				<h3 class="col-md-12">
					<?php the_author_meta('nickname'); ?> Posts:
				</h3>

			<?php
				while (have_posts()) {
					the_post();

					?>
					<div class="col-sm-12">
						<div class="main-post">
							<h3 class="post-title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							<div class="post-info">
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
						</div>
					</div>
					<div class="col-sm-3">
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
					</div>
					<div class="col-sm-9">
						<p class="post-desc">
							<?php
								the_excerpt();
							?>
							<a href="<?php the_permalink(); ?>">
								<?php the_title('Read '); ?>
							</a>
						</p>
						<hr />
						<p class="post-categories">
							<i class="fa fa-tags" aria-hidden="true"></i>
							<?php echo 'Categories: '; the_category(', '); ?>
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

					<?php
					}
				}


			?>
		</div>
		<div class="row">
			<div class="col-sm-6 prev-link">
				<?php
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
				?>
			</div>
			<div class="col-sm-6 text-right prev-link">
				<?php
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
				?>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>

</div>