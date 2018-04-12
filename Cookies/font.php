<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	setcookie('fontSize', $_POST['font-size'], time() + 60 * 60);
	setcookie('backgroundColor', $_POST['backgroundColor'], time() + 60 * 60);
	header('Location: font.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Set Cookie</title>
	<link rel="stylesheet" href="">
	<style>
	body { background: <?php echo $_COOKIE['backgroundColor']; ?> }
	li {
		list-style: none;
		margin: 10px 0;
	}
	p {
		font-size: <?php echo $_COOKIE['fontSize'] . 'px'; ?>;
	}
	option {
		text-transform: capitalize;
	}
	</style>
</head>
<body>

	<form action="" method="post">
		<li>
			<label for="">Select preferred font:</label>
			<select name="font-size" id="font-size">
				<option value="20">20</option>
				<option value="26">26</option>
				<option value="30">30</option>
			</select>
		</li>

		<li>
			<label for="">Select preferred Background Color:</label>
			<input type="color" name="backgroundColor" id="backgroundColor">
		</li>

		<li>
			<input type="submit" name="submit">
		</li>
	</form>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima modi sint, perspiciatis eligendi ex corporis consequatur aliquid accusantium sunt consectetur quaerat incidunt, ut in quae! Dolorem autem commodi quibusdam libero.</p>
</body>
</html>