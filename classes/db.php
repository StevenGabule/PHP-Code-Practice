 <?php 
// class DB
// {

// }
// $db = new DB();

 class House
 {
 	public $home_color = 'white';
 	public $rooms = 3;
 	public $for_sale = true;
 	public function __construct($home_color = null) {
 		if($home_color) { $this->home_color = $home_color; }
 	}
 	public function add_room() { $this->rooms++; }
 	public function sell() { $this->for_sale = false; }
 }

$house = new House('red');
$house->add_room();
$house->add_room();

echo "This {$house->home_color} house has {$house->rooms} rooms. <br>";
// if($house->for_sale) {

// 	echo 'it is for sale <br>';
// } else{
// 	echo 'it not! <br>';
// }
 
echo ($house->for_sale) ? 'It is for sale <br>' : 'not for sale <br>';

$house = new House();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->sell();

echo "This {$house->home_color} house has {$house->rooms} rooms. <br>";
echo ($house->for_sale) ? 'It is for sale <br>' : 'not for sale <br>';
