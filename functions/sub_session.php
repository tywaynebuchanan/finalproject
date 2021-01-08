<?php ob_start();
include ('config/dbconn.php');
// Start Session 
session_start();
$id = $_SESSION['sub_id'];
$user_check = $_SESSION['login_user'];
$role = $_SESSION['role'];
$uri = $_SERVER['REQUEST_URI'];
$pos = strpos($uri, 'page');

if($pos AND $role !== 'DataEntry'){
	header('location:home_sub.php');
}

?>