<?php ob_start();
include('functions/registration.php');
?>

<!Doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>NetWatch Register Subscriber</title>
  </head>
  <body>
  
  <section class="container-fluid">
      <section class="row justify-content-center">
      <h1> NetWatch Subscriber Registration</h1>
      </section>
  </section>
 <!--   Login Form -->
 <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container" action="" method="post">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
              
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname">
            </div>

              <div class="form-group">
              <label>User Name</label>
              <input type="text" class="form-control" placeholder="Username" id="username" name="username">
            </div>

             <div class="form-group">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="someone@somwhere.com" id="email" name="email">
            </div>

             <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter a Password">
            </div>

            
            <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            <a class="btn btn-primary btn-block" href="index.php" role="button">Cancel Registration</a>
            <a class="btn btn-primary btn-block" href="index.php" role="button">Login</a>
            </div>

            
            <!--PHP code to set error message -->
             <?php 
              if(isset($_SESSION['message'])): ?>
              <div class="alert alert-<?=$_SESSION['msg_type']?>">
              <?php echo $_SESSION['message'];
             unset($_SESSION['message']); ?>
            
            <?php endif;?>
            </div>
          
        </form>
        </section>
      </section>
  </section>
<!-- Login Form Ends -->


     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>