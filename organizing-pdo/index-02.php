<?php 
require 'functions.php'; 
$conn = connect($config);

if($conn) {
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 17;
	$rows = query("SELECT * FROM users WHERE id = :id", array('id' => $id), $conn)[0];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if($rows) : ?>
	<h1><?= $rows['username'];?>'s Profile</h1>
<?php else: ?>
	<h1>No Users</h1>
<?php endif;?>
</body>
</html>