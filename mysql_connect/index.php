<?php 
require 'function.php'; 
require 'config.php'; 

$conn = connect($config['DB_HOST'], 
	            $config['DB_USER'], 
	            $config['DB_PASS'], 
	            $config['DB_NAME']);

$results = query('SELECT * FROM users', $conn);
require 'index.view.php';
?>
