<?php 
// single array of variable
// $months = array('January', 'Febrary', 'March', 'April', 'May');
// echo $months[1];

// $tuts_sites = array('Net', 'Design', 'Wordpress', 'Coding');
// print_r($stuts_sites);

// Associative Array 
$tuts_sites = array(
	'net'       => 'http://facebook.com',
	'design'    => 'http://Design.com',
	'wordpress' => 'http://wordpress.com',
	'coding'    => 'http://livetocode.com',
	);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<h1>Arrays</h1>
	<ul>
	<?php
		// foreach($tuts_sites as $sites => $url) {
		// 	echo  "<li><a href=\"{$url}\">" . ucwords($sites) . "+</a></li>";
		// }	 
	?>

	<?php foreach($tuts_sites as $sites => $url) : ?>
		<li><a href="<?= $url; ?>"><?= ucwords($sites); ?></a></li>
	<?php endforeach; ?>
	</ul>
</body>
</html>