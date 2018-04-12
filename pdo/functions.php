<?php 
require 'config.php';

$letter = 'J';
try {
	$conn = new PDO('mysql:host=localhost;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $conn->errorCode();
	// $conn->errorInfo();
	// anti pattern
	// $results = $conn->query('SELECT * FROM users WHERE id = '. $conn->quote($id));
	// $stmt = $conn->prepare('SELECT * FROM users WHERE username LIKE :letter');
	$stmt = $conn->prepare('INSERT INTO users(username) VALUES(:username)');
	$stmt->bindParam('username', $username, PDO::PARAM_STR);
	$users = array('AmyDoe', 'BobbyDoe', 'CliffDoe');
	foreach($users as $username)
	{
		$stmt->execute();
	}
	// $username = 'AmyDoe';
	// $stmt->execute();

	// $username = 'BobbyDoe';
	// $stmt->execute();

	// $username = 'CliffDoe';
	// $stmt->execute();

	// $stmt->setFetchMode(PDO::FETCH_OBJ);
	// $stmt->execute(array(
	// 		'letter' => $letter . '%'
	// 	));

	// $stmt->bindParam(':letter', $letter, PDO::PARAM_STR);
	// $stmt->execute();
	
	// $result = $stmt->fetchAll();	

	// while($row = $stmt->fetch()) {
	// 	print_r($row);
	// }

} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
}
?>