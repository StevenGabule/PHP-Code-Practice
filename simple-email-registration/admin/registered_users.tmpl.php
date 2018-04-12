<!DOCTYPE html>
<html>
<head>
	<title>Registed Users</title>
</head>
<body>
<!-- need to be locked down -->
<h1>Folks on your mailing list</h1>
<?php 
	if($registered_users) {
		foreach($registered_users as $user) {
			list($name, $email) = $user;
			// work like this 
			// array('name' => 'johnpaul', 'email' => 'johnpaul@gmail.com');
			echo "<li>$name <a href=\"mailto:$email\">$email</a></li>";
		} 
	} else {
		echo "<li>No registration members.!</li>";
	}

?>
</body>
</html>