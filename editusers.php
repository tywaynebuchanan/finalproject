<?php ob_start();

include ('functions/session.php');

if(isset($_GET['edit'])){

  $id = $_GET['edit'];
  $result = mysqli_query($conn,"SELECT * FROM tblSubscribers WHERE sub_id = $id");
  if($result->num_rows > 0)
  {
    $row = $result->fetch_array();
    
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
    $isactive = $row['isActive'];
    $role = $row['role'];
    
  }

}

if(isset($_POST['save'])){

       
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $isactive = $_POST['active'];
    $role = $_POST['role'];
    
$insert_query = "UPDATE tblSubscribers SET firstname = '".$firstname."', lastname = '".$lastname."', username = '".$username."', email = '".$email."', password = '".$password."', isActive = '".$isactive."', role = '".$role."' WHERE sub_id = $id";


$user_update = mysqli_query($conn,$insert_query);
if(!$user_update){

  die("QUERY FAILED". mysqli_error($conn).''. mysqli_errno($conn));
}

$_SESSION['message']= "The user has been successfully edited";
$_SESSION['msg_type'] = "success";
header("location: admin.php");//Redirects page after movie is edited


}else{  $_SESSION['message_ifblank'] = "Fields can not be blank";
        $_SESSION['msg_type'] = "danger";

}

?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
   <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>NetWatch Register Subscriber</title>
  </head>
  <body>

<!-- Header-->

<div class = "container">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="admin.php">
     NetWatch Admin 
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      </div>
  </div>

    <div class="navbar-end">
      <div class="navbar-item">

        <div class="navbar-item has-dropdown is-hoverable">
        
        <a class="navbar-link">
          <span class="icon">
                <i class="fas fa-user"></i>
              </span>
              <span>
                <?php echo $user_check?>
              </span>
        </a>



        <div class="navbar-dropdown">
          <a class="navbar-item" href="add_user.php">
            Add User          </a>
          <a class="navbar-item" href="#">
            Edit Movie/Delete
          </a>
           <a class="navbar-item">
            Contact
          </a> 
      </div>
      </div>

        <p class="control">
            <a class="button is-link" href="functions/logout.php">
              <span class="icon">
                <i class="fas fa-sign-out-alt"></i>
              </span>
              <span>Logout</span>
            </a>
          </p>
      
       
      </div>
    </div>
  </div>
</nav>
</div>


<!--Header Ends-->
    
<!-- Hero -->

<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Add User
      </h1>
      <h2 class="subtitle">
        Enter the information for the new user/subscriber
      </h2>
    </div>
  </div>
</section>
<!-- Hero Ends -->

<!-- Form Begins -->

<div class="container is-max-desktop">

 <?php 

  if(isset($_SESSION['error'])): ?>

<div class="notification is-<?=$_SESSION['msg_type']?>">
   
   <?php echo $_SESSION['error'];
     unset($_SESSION['error']); ?>
 
</div>
 <?php endif;?>

  <form method="post" action="">
  <div class="field">
  <label class="label">First Name</label>
  <div class="control">
    <input class="input" type="text" name="firstname" placeholder="Name of User" value="<?php echo $firstname;?>">
  </div>

</div>

<div class="field">
  <label class="label">Last Name</label>
  <div class="control">
    <input class="input" type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>">
  </div>
</div>


<div class="field">
  <label class="label">Username</label>
  <div class="control">
    <input class="input" type="text" name="username" placeholder="Username" value="<?php echo $username;?>">
  </div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" type="text" name="email" placeholder="Email"   value="<?php echo $email;?>" >
  </div>
</div>

<div class="field">
  <label class="label">Password</label>
  <div class="control">
    <input class="input" type="password" name="password" placeholder="Password" value="<?php echo $password;?>">
  </div>
</div>


<div class="field">
  <label class="label">Active</label>
  <div class="control">
    <div class="select">
      <select name="active">
        <option value="<?php echo $isactive;?>">Is Active</option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
        
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Role</label>
  <div class="control">
    <div class="select">
      <select name ="role">
        <option value="<?php echo $role;?>">Select role</option>
        <option value="Admin">Admin</option>
        <option value="DataEntry">DataEntry</option>
        <option value="Subscriber">Subscriber</option>
      </select>
    </div>
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <input class="button is-link" type="submit" name="save" value="Update User">

  
    <a class="button is-warning" href="admin.php">Cancel</a>
  </div>
</div>
</div>
</form>
<!-- Login Form Ends -->
  </body>

<?php include('footer/footer.php'); ?>

</html>