<?php 
session_start();
session_destroy();
$_SESSION = array();
// delete the cookie/ next lesson
header("Location: login.php");
?>