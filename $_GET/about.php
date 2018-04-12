<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>About us</h1>
	<?php 
		echo htmlspecialchars(strip_tags($_GET['name'])); 
	?>
</body>
</html>