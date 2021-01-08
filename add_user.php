<?php ob_start();
include('functions/adduser.php');
include ('functions/session.php');

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

<!--Nav Bar -->
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
          <a class="navbar-item" href="editusers.php">
            Edit Movie/Delete
          </a>
           <a class="navbar-item" href="admin_payments.php">
          Payments
          </a> 
             <hr class="navbar-divider">
          <a class="navbar-item" href="functions/logout.php">
           <span class="icon">
                <i class="fas fa-sign-out-alt"></i>
              </span>
           Logout
          </a>
        </div>
      </div>
      </div>
      </div>

        
      
       
      </div>
    </div>
  </div>
</nav>
</div>
<!--Nav Bar Ends-->
    
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

  <form method="post" action="">
  <div class="field">
  <label class="label">First Name</label>
  <div class="control">
    <input class="input" type="text" name="firstname" placeholder="Name of User">
  </div>

</div>

<div class="field">
  <label class="label">Last Name</label>
  <div class="control">
    <input class="input" type="text" name="lastname" placeholder="Last Name">
  </div>
</div>


<div class="field">
  <label class="label">Username</label>
  <div class="control">
    <input class="input" type="text" name="username" placeholder="Username">
  </div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" type="text" name="email" placeholder="Email">
  </div>
</div>

<div class="field">
  <label class="label">Password</label>
  <div class="control">
    <input class="input" type="password" name="password" placeholder="Password">
  </div>
</div>

<div class="field">
  <label class="label">Active</label>
  <div class="control">
    <div class="select">
      <select name="active">
        <option>Is Active</option>
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
        <option>Select role</option>
        <option value="Admin">Admin</option>
        <option value="DataEntry">DataEntry</option>
        <option value="Subscriber">Subscriber</option>
      </select>
    </div>
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <input class="button is-link" type="submit" name="submit" value="Add User">

  
    <a class="button is-link" href="admin.php">Cancel</a>
  </div>
</div>
</div>
</form>
<!-- Login Form Ends -->
  </body>

<?php include('footer/footer.php'); ?>

</html>