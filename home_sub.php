<?php 
include ("functions/data_session.php");
include("functions/process.php");

$query = mysqli_query($conn,"SELECT * FROM tblMovies");
      if($query->num_rows > 0){
       
        

?>

<!Doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     <script src="https://kit.fontawesome.com/23bd622209.js" crossorigin="anonymous"></script>
    <title>NetWatch Login</title>
  </head>
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
            Purchase a Movie
          </a>
          <a class="navbar-item" href="account_page.php">
           Upgrade Package
          </a>
          <a class="navbar-item" href="">
            Your watchlist
          </a>
          <a class="navbar-item" href="sub_activity.php">
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

<!--Hero Begin -->
<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
      NetWatch
      </h1>
      <h2 class="subtitle">
        The place to watch all your movies
      </h2>
    </div>
  </div>
</section>
<!--Hero Ends -->

<!-- Search Bar-->
<!-- <div class="pt-3 ">
<div class="container is-fullwidth">
  <form action="functions/process.php" method="post">
<div class="field has-addons">
  <div class="control">
    <input class="input" type="text" type="submit" name ="keyword" placeholder="Find a repository">
  </div>
  <div class="control">
    <a class="button is-info" name="searchi ">
      Search
    </a>
  </div>
</div>
</form>
</div>
</div> -->


<!--Search Bar Ends-->

<!--Section Begin-->
<section class="section">
    <div class="container">
      <h1 class="title">New Movies</h1>
      <h2 class="subtitle">
        Each day a new movie is added <strong>EVERYDAY</strong>, Don't see your favourite movie?
      </h2>
    </div>
  </section>
<!--Section Ends-->

<div class="container is-fullwidth">
 <section>
  <table class="table is-hoverable is-striped is-narrow is-bordered has-text-centered">
    <!-- <thead>
      <tr>
       <td></td>
         <td>
          Title
        </td>
        <td>
          Description
        </td>
        <td>
          Year
        </td>
        <td>
          Publisher
        </td>
        <td>
          Actor
        </td>
         <td>
          Category
        </td>
        <td>
          Country
        </td>
        <td colspan="2">
          Action
        </td>
       
      </tr>
    </thead> -->
<?php
     while ($row = mysqli_fetch_assoc($query))

       {
echo '
    <tbody>
      <tr>
     <td >
          <img src='.$row['image'].' alt="Placeholder image">
        </td> 
        <td class ="p-5">
          '.$row['title'].'
        </td>
        <td>
          '.$row['description'].'
        </td>
        <td>
          '. $row['year'].'
        </td>
        <td>
          '.$row['publisher'].'
        </td>
        <td>
          '.$row['actor'].'
        </td>
         <td>
          '.$row['category'].'
        </td>
        <td>
          '.$row['country'].'
        </td>
        

        
      </tr>
      ';}?>
    </tbody>
  </table>
</section>
</div>
  
    <section class="section">
        <div class="container">
         
        </div>
    </section>
  </div>
  </body>


<?php }?>
<?php include('footer/footer.php'); ?>


</html>