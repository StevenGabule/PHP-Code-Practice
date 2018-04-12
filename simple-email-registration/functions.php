<?php 
define('MAILING_LIST', $_SERVER['DOCUMENT_ROOT'] . '/Review_PHP/mailing_list.php');

/* =================================================
	add a new item to the registered users lists.
==================================================== */
function add_registered_user($name, $email) {
	# really important: SECURE FILE
	file_put_contents(MAILING_LIST, "$name: $email\n", FILE_APPEND);
}


/* =================================================
	preserve form state
==================================================== */
function old($key) {
	if(!empty($_REQUEST[$key])) {
		return htmlspecialchars($_REQUEST[$key]);
	}
	return '';
}

/* =================================================
	Determines whether an email address is valid.
==================================================== */
function valid_email($email)
{
	// return preg_match('/regular expression/', $email);
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/* =================================================
	Returns an array of all registered users.
==================================================== */
function get_registered_users($path = MAILING_LIST) {
	$users = file($path);
	if(count($users)) {
		return array_map(function($users) {
			return explode(': ', htmlspecialchars(strip_tags($users)));
			// return array_map('htmlspecialchars', $bits);
		}, $users);
	}
		return false;
	// print_r(explode(': ', $users[0]));
	// die();
}

?>
