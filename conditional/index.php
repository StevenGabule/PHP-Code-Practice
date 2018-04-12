<?php 


// if($month == 'January') {
// 	echo 'It does';
// } else {
// 	echo "no it's not!";
// }

// switch ($month) {
// 	case 'January':
// 		echo 'it is January';
// 		break;
	
// 	default:
// 		echo 'not the right month';
// 		break;
// }


// $months = array(
// 	'January'  => 'It is Jan',
// 	'February' => 'It is February',
// 	'March'    => 'it is march'
// 	);
// echo $months[$month];
// echo isset($months[$month]) ? $months[$month] : 'not the right month';

$month = 'January';

if( $month == 'January' || $month == 'May' ) {
	echo 'it is  june and may';
}  else {
	echo 'it is not of those!';
}
?>