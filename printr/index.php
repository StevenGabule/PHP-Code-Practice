<?php 

// printf(format, args)
// sprintf()
// sscanf()
// list()

// $name = "Joe";
// $age = 21;

// $greeting = sprintf("Hello %s and your %d", $name, $age);

// echo $greeting;s

// $value = sscanf("June 7th, 2014", '%s %[^,], %d');
// list($month, $day, $year)= sscanf("June 7th, 2014", '%s %[^,], %d');
// echo $month . "<br>";
// echo $day . "<br>";
// echo $year;

// list($name, $age) = array('Johnpaul', 22);
// echo $name . " " . $age;

sscanf("June 7th 2015", '%s %[^,], %d', $month, $day, $year);
echo $month . " " . $day . " " . $year;
?>