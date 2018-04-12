<?php 
// USING THE OLD mysql_connect API is an ANTI-PATTERNS! ONLY FOR REFERENCE!
function connect($host = 'localhost', $username, $password, $db = 'practice') {
	$conn = mysql_connect($host, $username, $password);

	if (!empty($db)) {
		mysql_select_db('practice', $conn);
	}
	return $conn;
}

// query a database record
function query($query, $conn) {
	$results = mysql_query($query, $conn);
	if($results) {
		$rows = array();
		while($row = mysql_fetch_object($results)) {
			$rows[] = $row;
		}
		return $rows;
	}
	return false;
}


