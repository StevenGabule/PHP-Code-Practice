<?php 
include 'init.php';

// type of requqst method
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// get their values
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (validate_user_creds($username, $password)) {
		$_SESSION['username'] = $username;
		header("Location: admin.php");
	} else {
		$status = 'Incorrect login credentials';
	}

}


// if(isset($_POST['submit'])) {
// 	echo 'it is submitted';
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Login</h1>
<form action="login.php" method="post">
	<ul>
		<li>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password: </label>
			<input type="password" name="password">
		</li>
		<li>
			<input type="submit" name="submit">
		</li>
	</ul>
</form>
<?php if(isset($status)) : ?>
	<?= $status; ?>
<?php endif; ?>
</body>
</html>