<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		 setcookie('fontSize', (int) $_POST['font-size'], time() + 60 * 60);
		 setcookie('backgroundColor', $_POST['background-color'], time() + 60 * 60);
		 header('Location: fonts.php');
	}

	// if (isset($_POST['font-size'])) {
	// 	$font_size = $_POST['font-size'];
	// } else if( isset($_COOKIE['fontSize'])) {
	// 	$font_size = $_COOKIE['fontSize'];
	// } else{ 	font-size: <?= //htmlspecialchars($font_size) . ';'; 
	// 	$font_size = 16;
	// }

	// $font_size = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px' : '16';
	$background_color = isset($_COOKIE['backgroundColor']) ? $_COOKIE['backgroundColor'] : 'white';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Set Cookies</title>
	<style>
		body { background: <?= htmlspecialchars($background_color) . ';'; ?> }
		li { list-style: none;}
		ul, li { margin: 0;padding: 0;}
	</style>
</head>
<body>
<form action="" method="post">
	<li>
		<!-- <label for="font-size">Your preferred font size?</label><br>
		<select name="font-size" id="font-size">
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="24">24</option>
		</select><br>
		<br> -->
		<label for="font-size">Your preferred background-color?</label><br>
		<select name="background-color" id="background-color">
			<option value="blue">Blue</option>
			<option value="black">Black</option>
			<option value="yellow">Yellow</option>
		</select>
	</li>
	<li>
		<input type="submit" name="submit" value="Submit">
	</li>
</form>
<h2>My Custom Page</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta similique fuga voluptate ea totam, aliquid autem recusandae error, in, tenetur ut rem laudantium nesciunt dolores accusantium quas iste quis suscipit. ipsum dolor sit amet, consectetur adipisicing elit. Hic nulla explicabo reiciendis vitae perspiciatis vel fugit ut facere in esse, architecto consectetur nobis minus ratione inventore animi eaque expedita perferendis. ipsum dolor sit amet, consectetur adipisicing elit. Unde nisi aperiam omnis officia tenetur officiis repellat id deleniti expedita explicabo cumque nulla velit, rerum consequuntur ducimus dolorum iure obcaecati nesciunt. ipsum dolor sit amet, consectetur adipisicing elit. Sint earum repellat non quaerat facilis, dolorem ad aliquam, enim exercitationem, ipsum assumenda at quibusdam veniam consectetur distinctio ex incidunt deserunt harum! ipsum dolor sit amet, consectetur adipisicing elit. Nostrum explicabo nemo, deserunt quae perferendis amet rerum magnam impedit. Dolores ea quam nulla soluta velit quisquam consequuntur labore aperiam veniam magnam? ipsum dolor sit amet, consectetur adipisicing elit. Quidem nisi omnis officiis fuga, earum explicabo dolor nostrum dicta rem vel impedit. Aliquam architecto iusto vel voluptate, perferendis voluptatem iure voluptatibus.</p>
</body>
</html>