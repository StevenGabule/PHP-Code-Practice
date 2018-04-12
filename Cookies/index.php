<?php 
	// setcookie('fontSize',  25, time() - 60 * 30, '/');
	setcookie('prefs[fontSize]', 25);
	setcookie('prefs[favoriteCategory]', 25);
	setcookie('prefs[screenWidth]', 25);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
	<style>
		p { font-size: <?= $_COOKIE['fontSize'] . "px"; ?>; }
	</style>
</head>
<body>
<?php 
	if(isset($_COOKIE['prefs'])) {
		foreach($_COOKIE['prefs'] as $key => $val) {
			echo '<li>' . htmlspecialchars($key) . ': ' . htmlspecialchars($val);
		} 
	}
?>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, laboriosam architecto nihil eligendi explicabo deserunt, suscipit illum est voluptates neque, repellat maiores, quo aliquam magni! Deserunt fuga ab nihil veniam.</p>
</body>
</html>