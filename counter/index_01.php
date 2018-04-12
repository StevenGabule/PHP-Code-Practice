<?php 
// function set_count($file_name = 'counter1.txt') {
// 	if(file_exists($file_name)) {
// 		// read the value
// 		$handle = fopen($file_name, 'r');

// 		// increment by 1
// 		$count = (int)fread($handle, 20) + 1;
// 		$handle = fopen($file_name, 'w');
// 		fwrite($handle, $count);
// 		fclose($handle);
// 	} else {
// 		// create a file if not exists
// 		$handle = fopen($file_name, 'w+');
// 		$count = 1;
// 		// set default  value by 1
// 		fwrite($handle, $count);
// 		fclose($handle);
// 	}
// 	return $count;
// }

function set_count($file_name = 'counter1.txt') {
	if(file_exists($file_name)) {
		$count = (int) file_get_contents($file_name) + 1;
		file_put_contents($file_name, $count);
	} else {
		$handle = fopen($file_name, 'w+');
		$count = 1;
		fwrite($handle, $count);
		fclose($handle);
	}
	return $count;
}
$count = set_count();
require('index.tmpl.php');
?>