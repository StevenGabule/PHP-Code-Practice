<!DOCTYPE html>
<html>
<head>
	<title>Super Global Post</title>
	<style>
	form li { list-style: none;margin-bottom: 7px;}
	form ul { padding: 0;margin: 0;}
	</style>
</head>
<body>
<h1>Contact Form</h1>
<?php 
	// if(!empty($_POST)) {
	// 	print_r($_POST);
	// }
	$status = "";
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (mail('johnpaul@yahoo.com', 'New Website Message', $_POST['message'])) {
			$status = "Thank you for your message";
		}
	}
?>
<form action="" method="post">
	<ul>
		<li>
			<label for="name">Name:</label>
			<input type="text" name="name" tabindex="0" autofocus id="name">
		</li>
		<li>
			<label for="email">Email:</label>
			<input type="email" name="email" tabindex="1" id="email">
		</li>
		<li>
			<label for="message">Your Message:</label><br>
			<textarea name="message" cols="30" rows="10"  tabindex="2" id="message"></textarea>	
		</li>
		<li>
			<input type="submit" value="Go!" tabindex="3">
		</li>
	</ul>
</form>

<?php if(isset($status)) {
	echo $status;
	} ?>
</body>
</html>