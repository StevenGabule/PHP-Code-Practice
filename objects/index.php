<?php 

// class Person
// {
// 	public $names;
// 	public $jobs;

// 	public function __construct($names, $jobs)
// 	{
// 		$this->names = $names;
// 		$this->jobs = $jobs;
// 	}

// 	public function communicate($style = 'Voice')
// 	{
// 		return 'communicating ' . $style;
// 	}
// }

// $person = new Person('John', 'Teacher');
// print_r($person);
// echo $person->communicate('Telepathy');
// class name
// {
// 	public function __call()
// 	{

// 	}
// }
// $person = new stdClass;
// $person->first = "John";
// $person->last = "Gabule";
// $person->job = "Web developer";

// error in this using stdClass
// $person->communicate = function() {
// 	return 'Communiting';
// };

// echo $person->communicate();

// print_r($person);
// echo $person->first . "<br>";
// echo $person->last . "<br>";
// echo $person->job . "<br>";

$person = array(
	'first' => 'JohnPaul',
	'last'  => 'Gabule'
);
// var_dump($person);

echo $person['first'];

// var_dump((object)$person);
$object = (object) $person;
echo $object->first;
// print_r((object)$person);
// echo gettype('5');