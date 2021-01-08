<?php ob_start();
 include ('config/dbconn.php'); 
session_start(); // Start of session

// If statement to check if the user did not enter their username or password
if(isset($_POST['submit'])){
	if(empty($_POST['username']) && empty($_POST['password'])){
		 $_SESSION['message'] = "Username and password can not be blank";
		 $_SESSION['msg_type'] = "danger";
		 
		}
		else
		{
			// Define username and password
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = sha1($password); // used to secure password entered. 

		
			//Statements to prevent hackers from hacking your site
			$username = strip_tags(mysqli_real_escape_string($conn,trim($username)));
			$password = strip_tags(mysqli_real_escape_string($conn,trim($password)));

			//Query to find username and password in user's table
			$query = mysqli_query($conn,"SELECT username,sub_id ,password,role,firstname,lastname,isActive FROM `tblSubscribers` WHERE username='$username'");

		

			$user = $query->fetch_assoc();
			$route = '';
			$sub_id = $user['sub_id'];
			$firstname = $user['firstname'];
			$lastname = $user['lastname'];
			if($user['isActive'] == "NO")
			{
				$_SESSION['message1'] = "Your subscription is not active";
				$_SESSION['msg_type1'] = "danger";
				
				
			} else{
			

			if ($user['password'] == $password && $user['isActive'] == "YES")
			{
				$_SESSION['login_user'] = $user['firstname'] . $user['lastname'];
				$_SESSION['role'] = $user['role'];
				$_SESSION['sub_id'] = $user['sub_id'];
				if($user['role'] === 'Admin') $route = "location:admin.php";
				if($user['role'] === 'DataEntry') $route = "location:home_page.php";
				if($user['role'] === 'Subscriber') $route = "location:home_sub.php";
						
			}else {	

				$_SESSION['message'] = "Username or password invalid";
				$_SESSION['msg_type'] = "danger";
			}
			header($route);
			mysqli_close($conn); // Close connection to the database
		}
	}
}
?>
