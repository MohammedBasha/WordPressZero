<?php
	// Get Category Comments Count
	$comments_count = 0; // Start the count with 0
	
	$comments_args = [
		'status' => 'approve' // Only get the approved comments
	];

	$all_comments = get_comments($comments_args); // Get the all comments

	// Loop through all the posts related to the JavaScript category to get its comments
	foreach ($all_comments as $comment) {

		$post_id = $comment->comment_post_ID;

		if (!in_category('js', $post_id)) {
			continue;
		}
		
		$comments_count++;
	}

	// Get the Posts Count

	$category_object = get_queried_object();
	$posts_count = $category_object->count;
?>

<div class="sidebar-wrapper sidebar-js">
	<div class="widget">
		<h3 class="widget-title"><?php single_cat_title(); ?> statistics</h3>
		<div class="widget-content">
			<ul>
				<li>
					<span>Comments count:</span> <?php echo $comments_count; ?>
				</li>
				<li>
					<span>Articles count:</span> <?php echo $posts_count; ?>
				</li>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h3 class="widget-title">Latest Css Posts</h3>
		<div class="widget-content">
			<ul>
				<?php
					$posts_args = [
						'posts_per_page' => 5,
						'cat' => 5
					];

					$posts_query = new WP_Query($posts_args);

					if ($posts_query->have_posts()) {

						while ($posts_query->have_posts()) {
							$posts_query->the_post();
				?>
							<li>
								<a href="<?php echo the_permalink(); ?>"
									title="<?php echo the_title(); ?>"
								>
									<?php echo the_title(); ?>
								</a>
							</li>
				<?php
						}
					}
				?>
			</ul>
		</div>
	</div>
	<div class="widget">
		<h3 class="widget-title">Top post by comments</h3>
		<div class="widget-content">
			<ul>
				<?php
					$top_posts_args = [
						'posts_per_page' => 1,
						'orderby' => 'comment_count'
					];

					$top_posts_query = new WP_Query($top_posts_args);

					if ($top_posts_query->have_posts()) {

						while ($top_posts_query->have_posts()) {
							$top_posts_query->the_post();
				?>
							<li>
								<a href="<?php echo the_permalink(); ?>"
									title="<?php echo the_title(); ?>"
								>
									<?php echo the_title(); ?>
								</a>
							</li>
				<?php
						}
					}
				?>
			</ul>
		</div>
	</div>
</div>