<?php 
 
include 'blog.php';

$posts = Blog\DB\get('posts', $conn);
view('index', array(
	'posts' => $posts,
	'name' => 'John Doe'
	));
