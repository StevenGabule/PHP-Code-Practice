
<?php 

$arr = array('name', 'gender', 'age', 'citizen');
// $arr = array(
// 	'name'    => 'Johnpaul',
// 	'gender'  => 'male',
// 	'age'     => '21',
// 	'citizen' => 'pilipino'
// 	);
// foreach($arr as $names => $value) {
// 	echo "<li><strong>" . ucwords($names) ."</strong> : {$value}</li>";
// }
// for($i = 0; $i < count($arr); $i++) {
// 	echo "<li>$arr[$i]</li>";
// }
// echo count($arr);
$i= 0;
$val = count($arr);
while ($i < $val) {
	echo "<li>$arr[$i]</li>";
	$i++;
}


?>
