<?php 

// function say_hello($name = "Johnpaul")
// {
// 	return "Hello XD $name";
// }

// echo say_hello("Joe");

// function pp($val)
// {
// 	echo '<pre>';
// 	print_r($val);
// 	echo '</pre>';
// }


// $arr = array('name' => 'John paul', 'age' => 21 );
// pp($arr);

// function array_pluck($toPluck,$arr) {
// 	$ret = array();

// 	foreach ($arr as $item) {
// 		$ret[] = $item[$toPluck];
// 	}
// 	return $ret;
// }


// using functions and reusable code and refactor to make it beautiful and elegant
// array pluck
function array_pluck($toPluck,$arr) {
	return array_map(function($item) use($toPluck) {
		// echo $toPluck; die();
		return $item[$toPluck];
	},$arr);
}


$people = array(
	array('name' => 'Johnpaul', 'age' => 21, 'Job' => 'Web developer'),
	array('name' => 'Joe', 'age' => 22, 'Job' => 'Web Analysis'),
	array('name' => 'Jane', 'age' => 16, 'Job' => 'Web Administrator'),
);

$names = array_pluck('name', $people); // array('Johnpaul', 'Joe', 'Jane')
// print_r($plucked);
foreach ($names as $name) {
	echo $name . "<br>";
}
?>