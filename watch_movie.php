<?php ob_start();
include ('functions/data_session.php');
include('header/subscriber.php');

if(!isset($_SESSION['login_user'])){
  header("location:home_sub.php");
}
   $id = $_SESSION['sub_id'];
  $mov_id = $_GET['movie'];
  $query = mysqli_query($conn,"SELECT tp.*, tm.* FROM tblPurchase tp,tblMovies tm WHERE tp.mov_id 
    = tm.mov_id AND tp.mov_id = $mov_id");
      $row = mysqli_fetch_assoc($query);
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
   <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>NetWatch Purchase Menu</title>
  </head>
  <title>Your Activites</title>
  <body>
  

<!-- Nav Bar -->

<div class = "container">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="home_page.php">
     NetWatch
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Help
      </a>
    </div>


    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">

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
          <a class="navbar-item" href="purchase_movie.php">
            Purchase a Package
          </a>
          <a class="navbar-item" href="account_page.php">
           Upgrade Package
          </a>
          <a class="navbar-item" href="">
            Your watchlist
          </a>
          <a class="navbar-item" href="">
           Your activity
          </a>
          <a class="navbar-item" href="">
            Account Settings
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
<!-- End -->

</nav>
</div>  
<!-- Nav Bar End -->


<!-- Hero -->

<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Your Activity
      </h1>
      <h2 class="subtitle">
       All the movies you purchased
      </h2>
    </div>
  </div>
</section>
<!-- Hero Ends -->
<div class="container pt-2">

</div>




<div class="has-text-centered">

<div class="container">
  
<table class="table">
  
<tr>
    
      <td><h1 class="title"><?php echo $row['title'];?></h1>
        <h2 class="subtitle"><?php echo $row['description'];?></h2>

          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row['trailer'];?>" frameborder="0" allow="accelerometer; " allowfullscreen>
 
    </iframe>
      </td>
    
      </tr>
<tr>
  <td>
    <a href="sub_activity.php" class="button is-link" >Back</a>
  </td>
</tr>
</table>
</div>
</div>
<div class="container is-max-desktop">
</div>
  </body>

<?php include('footer/footer.php'); ?>

</html>