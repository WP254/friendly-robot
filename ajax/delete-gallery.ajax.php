<?php 

global $post;
$postid = $_POST['postid'];
$args = array(
	'post_type' => 'attachment',
	'posts_per_page' => -1,
	'post_status' => 'any',
	'post_parent' => $postid
); 
$attachments = get_posts($args);
foreach($attachments as $attachment) :
	wp_delete_attachment($attachment->ID, true );
endforeach;
