<div class="main-content author-page">

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
				$author_posts_args = [
					'author' => get_the_author_meta('ID'),
					'posts_per_page' => 5
				];

				$author_posts = new WP_Query($author_posts_args);

				if ($author_posts->have_posts()) {
			?>
				
				<h3 class="col-md-12">
					Latest [<?php echo count_user_posts(get_the_author_meta('ID')) ?>] posts of <?php the_author_meta('nickname'); ?>:
				</h3>

			<?php
				while ($author_posts->have_posts()) {
					$author_posts->the_post();

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

					wp_reset_postdata();
				}
			?>
		</div>
		<div class="row">
			<?php

				$comments_per_page = 6;
				$comments_args = [
					'user_id' => get_the_author_meta('ID'),
					'status' => 'approve',
					'number' => $comments_per_page,
					'posts_status' => 'publish',
					'post_type' => 'post'
				];

				$comments = get_comments($comments_args);

				if ($comments) {
					foreach($comments as $comment) {
			?>
						<div class="col-sm-12 comment">
							<a href="<?php echo get_permalink($comment->comment_post_ID); ?>">
								<?php echo get_the_title($comment->comment_post_ID); ?>
							</a>
							
							<p>
								<?php
									echo 'Added on ' .
									mysql2date('l, F j, Y', $comment->comment_date);
								?>
							</p>
							<p><?php echo $comment->comment_content; ?></p>
							<hr>
						</div>
			<?php
					}
				}
			?>
		</div>
	</div>

	<?php get_footer(); ?>

</div>