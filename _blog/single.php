<?php 

require 'blog.php';

$post = Blog\DB\get_post_id((int)$_GET['id'], $conn);

if($post) {
	$post = $post[0];
	view('single', array(
	'post' => $post
	));
} else {
	header('Location: ../_blog/');
}
