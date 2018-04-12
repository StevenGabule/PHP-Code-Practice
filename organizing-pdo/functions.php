<?php 
namespace Blog\DB;
$config = array('username' => 'root', 'password' => 'johnpaul');
function connect($config)
{
	try {
		$conn = new \PDO('mysql:host=localhost;dbname=practice',
				         $config['username'], 
				         $config['password']);
		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch(PDOException $e) {
		return false;
	}
}

function query($query, $bindings, $conn) {
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	$result = $stmt->fetchAll();
	return $result ? $result : false;
}

function get($tablename, $conn) {
	try {
		$result = $conn->query("SELECT * FROM $tablename");
		return ($result->rowCount() > 0) ? $result : false;
	} catch(PDOException $e) {
		return false;	
	}
}