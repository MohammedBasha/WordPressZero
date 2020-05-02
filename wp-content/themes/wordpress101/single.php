

<?php get_header(); ?>


<div class="main-content">
	<div class="container">
		<div class="row">
			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();

						?>
						<div class="col">
							<div class="main-post single-post">
								<h3 class="post-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>

								<!-- Edit the post Link -->
								<?php edit_post_link('Edit <i class="fa fa-pencil" aria-hidden="true"></i>'); ?>

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
								<div class="post-image text-center">
									<a href="<?php the_permalink(); ?>"
									title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail(
											'',
											[
												'class' => 'img-responsive img-thumbnail'
											]
										); ?>
									</a>
								</div>
								<p class="post-desc">
									<?php
										the_content();
									?>
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
		<div class="row">
			<div class="col">
				<div class="user-avatar">
					<?php
						$avatar_arguments = [
							'class' => 'img-responsive img-thumbnail'
						];

						if (get_the_author_meta('ID')) {
							echo get_avatar(get_the_author_meta('ID'), 64, '', 'User Avatar', $avatar_arguments);
						} else {
							echo 'No Avatar';
						}
					?>
				</div>
				<h5 class="user-names">
					<?php the_author_meta('first_name'); ?> 
					<?php the_author_meta('last_name'); ?> 
					( <?php the_author_meta('nickname'); ?> )
				</h5>
				<p class="user-bio">
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
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="user-profile-info">
					<p class="user-posts-count">
						<b><?php echo get_the_author_meta('nickname') ?></b> posts count: 
						<span>
							<?php
								echo (get_the_author_meta('ID'));
							?>
						</span>
					</p>
					<p class="user-profile-link">
						<b><?php echo get_the_author_meta('nickname') ?></b> profile link: 
						<span>
							<?php
								the_author_posts_link();
							?>
						</span>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 prev-link">
				<?php
					if (get_previous_post_link()) {
						previous_post_link(
							'%link',
							'<i class="fa fa-3 fa-chevron-left" aria-hidden="true"></i> Previous Post: %title'
						);
					} else {
						echo 'No Previous Post';
					}
				?>
			</div>
			<div class="col-sm-6 text-right prev-link">
				<?php
					if (get_next_post_link()) {
						next_post_link(
							'%link',
							'Next Post: %title <i class="fa fa-3 fa-chevron-right" aria-hidden="true"></i>'
						);
					} else {
						echo 'No Next Post';
					}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php comments_template(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
