<?php

if (comments_open()) { 

	// Printing the comments bumber in h3 tag 
	?>

	<h5><?php comments_number('No comments', '1 Comment', '% comments') ?> </h5>

	<?php
	// printing the comments list with predefined bootstrap's classes
	echo "<ul class='list-unstyled comments-list'>";
	$comments_arguments = [
		'max_depth' => 3,
		'type' => 'comment',
		'avatar_size' => 64
	];

	wp_list_comments($comments_arguments);

	echo "</ul>";

	comment_form();
} else {
	echo 'Comments are disabled';
}