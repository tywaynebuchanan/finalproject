<?php ob_start();
include ('config/dbconn.php');
// Start Session 
session_start();
$user_check = $_SESSION['login_user'];
$role = $_SESSION['role'];
$id = $_SESSION['sub_id'];
$uri = $_SERVER['REQUEST_URI'];
$pos = strpos($uri, 'sub');

if($pos AND $role !== 'Subscriber'){
	header('location:home_page.php');
}

?>