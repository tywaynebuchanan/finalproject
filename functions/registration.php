<?php ob_start();
 include ('config/dbconn.php'); 

// session_start(); // Start of session

$status = "NO";
$in_role = "Subscriber";

if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//Prevents user from entering empty strings into Database
if(!empty($firstname) && !empty($lastname) && !empty($username)&& !empty($email)&& !empty($password))
{
$firstname = mysqli_escape_string($conn,$firstname);
$lastname = mysqli_escape_string($conn,$lastname);
$username = mysqli_escape_string($conn,$username);
$email = mysqli_escape_string($conn,$email);
$password = mysqli_escape_string($conn,$password);
$password = sha1($password);//Used to secure password

$isExisting_query = mysqli_query($conn,"SELECT username FROM `tblSubscribers` WHERE username='$username'");
$data = $isExisting_query->fetch_assoc();

if($data["username"] !== $username){


//Query to insert users into database
$insert_query = "INSERT INTO tblSubscribers (firstname,lastname,username,email,password,isActive,role)";
$insert_query .= "VALUES('{$firstname}','{$lastname}','{$username}','{$email}','{$password}','{$status}','{$in_role}')";
$register_user = mysqli_query($conn,$insert_query);
	if(!$register_user){

		die("QUERY FAILED". mysqli_error($conn).''. mysqli_errno($conn));
			}else{

				$_SESSION['message'] = "Your registration was successful!.";
 				$_SESSION['msg_type'] = "success";  
      }


	}else{

		$_SESSION['message'] = "$username already exists in the database";
		$_SESSION['msg_type'] = "danger";

}

}else{
	$_SESSION['message'] = "Feilds can not be blank!";
	$_SESSION['msg_type'] = "danger";
}
}	


?>