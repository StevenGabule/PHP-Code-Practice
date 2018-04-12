<?php 
$post = array(
	'author'       => 'JohnPaul Gabule',
	'title'        => 'My Awesome post',
	'body'         => 'Here is a new thing and gogogo!',
	'publish_date' => '12-24-2015'
);

// $email = "<h1>{$post['title']}</h1>";
// $email .= "<p>By: {$post['author']}</p>";
// $email .= "<div>{$post['body']}</div>";
// echo $email;

// $email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>", $post['title'], $post['author'], $post['body']);
// echo $email;
extract($post);

$email =  <<<EOT
	<h1>$title</h1>
	<p>By: $author</p>
	<h3>Date: $publish_date</h3>
	<p>$body</p>
	<div>body</div>
EOT;

echo $email;
?>