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
		<h3 class="widget-title">widget title</h3>
		<div class="widget-content">
			widget-content
		</div>
	</div>
	<div class="widget">
		<h3 class="widget-title">widget title</h3>
		<div class="widget-content">
			widget-content
		</div>
	</div>
</div>