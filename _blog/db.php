<?php namespace Blog\DB;

$config = array(
	'username' => 'root', 
	'password' => 'johnpaul', 
	'database' => 'new_blog');
function connect($config)
{
	try {
		$conn = new \PDO('mysql:host=localhost;dbname=' . $config['database'],
				         $config['username'], 
				         $config['password']);
		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch(Exception $e) {
		return false;
	}
}

function query($query, $bindings, $conn) {
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	return ($stmt->rowCount() > 0) ? $stmt : false;
	// $result = $stmt->fetchAll();
	// return $result ? $result : false;
}

function get($tablename, $conn, $limit = 10) {
	try {
		$result = $conn->query("SELECT * FROM $tablename ORDER BY id DESC LIMIT $limit");
		return ($result->rowCount() > 0) ? $result : false;
	} catch(Exception $e) {
		return false;	
	}
}

function get_post_id($id, $conn) {
	$query = query('SELECT * FROM posts WHERE id = :id LIMIT 1', array('id' => $_GET['id']), $conn);
	if( $query ) { 
		return $query->fetchAll();
	};
}