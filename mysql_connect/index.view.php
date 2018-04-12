<!DOCTYPE html>
<html>
<head>
	<title>Anti-Pattern</title>
</head>
<body>
<?php 
	if( $results ) {
		foreach($results as $row) {
			echo $row->username . "<br>";
		}
	} else {
		echo "No records found!";
	}
?>
</body>
</html>