<?php 
class House
{
	public $home_color = 'white';
	public $rooms = 3;
	public  $for_sale = true;

	public function __construct($home_color = null) {
		if($home_color) { $this->home_color = $home_color; }
	}
	public function add_room() {
		$this->rooms++;
	}
	public function sell() {
		$this->for_sale = false;
	}
}


?>