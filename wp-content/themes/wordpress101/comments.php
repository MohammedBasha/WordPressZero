<?php

if (comments_open()) {
	echo '<h3>' . comments_number('No comments', '1 Comment', '% comments') . '</h3>';
	echo "<ul class='list-unstyled comments-list'>";
	$comments_arguments = [
		'max_depth' => 3,
		'type' => 'comment',
		'avatar_size' => 64
	];

	wp_list_comments($comments_arguments);

	echo "</ul>";
} else {
	echo 'Comments are disabled';
}