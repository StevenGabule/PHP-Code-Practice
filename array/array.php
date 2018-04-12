<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Array Module</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$tuts = array(
		'name' => 'Hello World',
		'Job' => 'Web Developer',
		'Status' => 'Single'
	);
	?>
	<ul>
		<?php foreach($tuts as $name => $job) : ?>
			<li><a href="<?= $name ?>"> <?= $job; ?></a></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>