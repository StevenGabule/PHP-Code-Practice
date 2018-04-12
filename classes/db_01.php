<?php 
require_once 'house.php';

$house = new House('red');
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();

echo "This {$house->home_color} house has {$house->rooms} rooms.<br>";

// if($house->for_sale) {
// 	echo "Still available";
// } else {
// 	echo "Sold";
// }
echo ($house->for_sale) ? 'It is for sale' : 'its not for sale';
echo "<br>";

$house1 = new House();
$house1->add_room();
$house1->add_room();
$house1->add_room();
$house1->add_room();
$house1->add_room();
$house1->add_room();
$house1->sell();
echo "This {$house1->home_color} house is {$house1->rooms} rooms.<br>";
echo ($house1->for_sale) ? 'It is for sale' : 'its not for sale';

?>