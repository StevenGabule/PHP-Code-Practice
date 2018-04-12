<?php
	setcookie('fontSize2', 25, time() + 60 * 60 * 24 * 376);
	setcookie('pref[fontSize]', 14);
	setcookie('pref[favoriteCategory]', 54);
	setcookie('pref[screenWidth]', 120);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookies</title>
	<link rel="stylesheet" href="">
	<style>
	li {
		font-size: <?= $_COOKIE['fontSize2'] . 'px'; ?>;
	}
	</style>
</head>
<body>
	<?php 
	if(isset($_COOKIE['pref'])) {
		foreach($_COOKIE['pref'] as $key => $value) {
			echo "<li>{$key} : {$value}</li>";
		}
	} 
	?>
</body>
</html>