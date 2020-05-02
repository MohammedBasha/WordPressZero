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
	</div>

	<?php get_footer(); ?>

</div>