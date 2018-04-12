<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SUPERGLOBAL VARIBLE ARRAY $_GET </title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$name = htmlspecialchars(strip_tags(trim($_GET['name'])));
	echo $name;

	?>
</body>
</html>