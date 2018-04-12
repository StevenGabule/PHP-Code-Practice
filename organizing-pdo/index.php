<?php 
require 'functions.php';
use Blog\DB as Database;
$conn = Database\connect($config);
if( $conn ) {
	$users = Database\get('users', $conn);
 } else {
 	echo 'could not connect';
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	if($users) {	
		foreach($users as $user) {
			echo "<li>{$user['username']}</li>";
		}
	} else {
		echo "no rows returned";
	}
?>
</body>
</html>