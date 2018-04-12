<?php
include 'init.php';

?>
<?php 
	if(!is_logged_in()) {
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin sections</title>
</head>
<body>
<h1>Hello <?php echo $_SESSION['username']; ?> in Administration Section</h1>
<a href="logout.php">Logout</a>
</body>
</html>