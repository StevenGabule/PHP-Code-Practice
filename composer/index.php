<?php 
require_once 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg) {
	$cfg->set_model_directory('models');
	$cfg->set_connections(array(
		'development' => 'mysql://root:johnpaul@localhost/new_blog'
	));
});

// $posts = Post::all(); // return the record 
// $posts = Post::create(array(
// 		'title' => 'it is activerecord great?',
// 		'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quod, fuga saepe. Magnam ad quae, excepturi odit tempore esse, possimus.'
// 	)); // add record in the table
// print_r($posts);

$posts = Post::find(1);
$posts->title = "This is change name";
$posts->body = "Document has been change";
$posts->save();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php// foreach($posts as $p) : ?>
	<!-- <article> -->
		<!-- <h2><?php //echo $p->title; ?></h2> -->
		<!-- <div class="body"> -->
			<!-- <p><?php // echo $p->body; ?></p> -->
		<!-- </div> -->
	<!-- </article> -->
<?php //endforeach; ?>
</body>
</html>