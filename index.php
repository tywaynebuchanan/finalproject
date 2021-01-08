<?php ob_start();
include ('functions/login.php');
?>
<!DOCTYPEhtml>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/23bd622209.js" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>NetWatch Login</title>
  </head>
  <body>
  
  <section class="container-fluid">
      <section class="row justify-content-center">
      <h1> NetWatch</h1>
      </section>
  </section>

 <!--   Login Form -->
 <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container" action="" method="post">
            <div class="form-group">
              <label>User Name</label>
              <input type="text" class="form-control" id="username" name="username">
              <small id="error_username" class="form-text text-danger" ></small>
              </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="password" name="password">
              <small id="error_password" class="form-text text-danger" ></small>
            </div>
             <button type="submit" name="submit" id="SubmitBtn" class="btn btn-primary btn-block">Submit</button>
            
             <div class="form-group">

              <label><a href="#">Forgot Password</a></label>
            </div>
             <div class="form-group">
              <label><a href="register_sub.php">Register </a></label>
            </div>

           
            <!--PHP code to set error message -->
             <?php 
              if(isset($_SESSION['message'])): ?>
              <div class="alert alert-<?=$_SESSION['msg_type']?>">
                
              <?php echo $_SESSION['message'];
              unset($_SESSION['message']); ?>
            
            <?php endif;?>


             <?php 
              if(isset($_SESSION['message1'])): ?>
              <div class="alert alert-<?=$_SESSION['msg_type1']?>">
                
              <?php echo $_SESSION['message1'];
              unset($_SESSION['message1']); ?>
              <a href="mem_expired.php?edit=<?php echo $sub_id?>" class="btn btn-primary" role="button">Make Payment</a>
            <?php endif;?>

            
            </div>
        </form>
        </section>
      </section>
  </section>
<!-- Login Form Ends -->


        <script src="js/register.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>