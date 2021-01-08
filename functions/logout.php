<?php ob_start();

session_start();
session_destroy();

unset($_SESSION['login_user']);
$_SESSION['message'] = "You are now log out";
$_SESSION['msg_type'] = "success";
header("location:../index.php");	

	

?>
