<?php 
ob_start();
include ('config/dbconn.php'); 
// session_start(); // Start of session


if(isset($_POST['submit'])){

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$active = $_POST['active'];
	$role = $_POST['role'];
	$password = sha1($password);
	


//Prevents user from entering empty strings into Database
if(!empty($firstname) && !empty($lastname) && !empty($username)&& !empty($email)&& !empty($password) && !empty($active) && !empty($role))

{

//Mysqli function to prevent SQL Injections
$firstname = mysqli_escape_string($conn,$firstname);
$lastname = mysqli_escape_string($conn,$lastname);
$username = mysqli_escape_string($conn,$username);
$email = mysqli_escape_string($conn,$email);
$password = mysqli_escape_string($conn,$password);
$active = mysqli_escape_string($conn,$active);
$role = mysqli_escape_string($conn,$role);




$insert_query = "INSERT INTO tblSubscribers (firstname,lastname,username,email,password,isActive,role)";
$insert_query .= "VALUES('{$firstname}','{$lastname}','{$username}','{$email}','{$password}','{$active}','{$role}')";
$users = mysqli_query($conn,$insert_query);
if(!$users){

	die("QUERY FAILED". mysqli_error($conn).''. mysqli_errno($conn));
}
$_SESSION['message']= "$firstname was added to the database";
$_SESSION['msg_type'] = "success";
header("location: admin.php");//Redirects page after movie is edited
}else{

$_SESSION['error'] = "Fields can not be blank";
$_SESSION['msg_type'] = "danger";

}

}

if(isset($_GET['approve'])){

  $id = $_GET['approve'];
  $result_update = mysqli_query($conn,"UPDATE tblSubscribers SET isActive ='YES' WHERE sub_id = $id");
  $_SESSION['message'] = "The subscriber has been approved";
  $_SESSION['msg_type'] = "success";
      
}

if(isset($_GET['unapprove'])){

  $id = $_GET['unapprove'];
  $result_update = mysqli_query($conn,"UPDATE tblSubscribers SET isActive ='NO' WHERE sub_id = $id");
  $_SESSION['message'] = "The subscriber has been un-approved";
  $_SESSION['msg_type'] = "warning";
      
}




if(isset($_GET['delete'])){

  $id = $_GET['delete'];
  $result_delete = mysqli_query($conn,"DELETE FROM tblSubscribers WHERE sub_id = $id");
  $_SESSION['message'] = "User has been deleted";
  $_SESSION['msg_type'] = "warning";
    
  
}  






?>