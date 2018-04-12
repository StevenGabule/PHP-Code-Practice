<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>$_POST SUPERGLOBAL VARIABLE</title>
	<link rel="stylesheet" href="">
	<style>
	body{
		margin: 0 auto;
		width:900px;
	}
	</style>
</head>
<body>
	<?php 
		$status = "";
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			// if(mail('johnpaulgabule@gmail.com', 'PHP SUPERGLOBAL Varible', $_POST['message'])) {
			// 	$status = "Thank you for the message!";
			// }

			// $name = $_POST['name'];
			// $email = $_POST['email'];
			// $message = $_POST['message'];

			// echo $name . "<br>";
			// echo $email . "<br>";
			// echo $message . "<br>";
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';
		}
	?>
	<form action="" method="post">
		<label for="name">Name:</label><br>
		<input type="text" name="name"><br><br>

		<label for="email">Email:</label><br>
		<input type="email" name="email"><br><br>

		<label for="message">Message:</label><br>
		<textarea name="message" id="message" cols="30" rows="10"></textarea><br>

		<input type="submit" name="submit" value="Go!">
	</form>

	<?php 
	if(isset($status)) {
		echo $status;
	} else {
		echo '';
	}
	?>
</body>
</html>