<?php ob_start();
include ('config/dbconn.php');

// Start Session 
session_start();

$user_check = $_SESSION['login_user'];
$role = $_SESSION['role'];
$uri = $_SERVER['REQUEST_URI'];
$pos = strpos($uri, 'admin');
if($pos AND $role !== 'Admin'){
	header('location:home_page.php');
}

?>