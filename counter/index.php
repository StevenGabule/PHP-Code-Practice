<?php 
/*
function set_count($file_name = 'counter.txt')
{
	if(file_exists($file_name)) {
		// read the value
		$handle = fopen($file_name, 'r');
		// increment it by one
		$count = (int)fread($handle, 20) + 1;
		// echo $count;die();
		// echo gettype($count);die();
		$handle = fopen($file_name, 'w');
		fwrite($handle, $count);

		// close
		fclose($handle);
	} else{
		// create it if not being made or create
		$handle = fopen($file_name, 'w+');
		$count = 1;
		// set a default value of 1
		fwrite($handle, $count);
		fclose($handle);
	}
	return $count;
}
*/
function set_count($file_name = 'counter.txt')
{
	if(file_exists($file_name)) {
		// read the value
		$count = (int) file_get_contents($file_name) + 1;
		file_put_contents($file_name, $count);
		// print_r(file($file_name));
		// die();		
	} else{
		// create it if not being made or create
		$handle = fopen($file_name, 'w+');
		$count = 1;
		// set a default value of 1
		fwrite($handle, $count);
		fclose($handle);
	}
	return $count;
}
$count = set_count();

require 'index.tmpl.php';
?>