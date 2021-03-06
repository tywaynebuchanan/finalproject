<?php ob_start();
include ('functions/process.php');
include ('functions/data_session.php');
include('header/subscriber.php');

if(!isset($_SESSION['login_user'])){
  header("location:home_sub.php");
}


function ShowMovies(){


  global $conn;
  $id = $_SESSION['sub_id'];

  $query = mysqli_query($conn,"SELECT * FROM tblMovies");
      if($query->num_rows > 0){

        while ($row = mysqli_fetch_assoc($query))

       {

        $image = $row['image'];
        $title = $row['title'];
        $description = $row['description'];
        $year = $row['year'];
        $publisher = $row['publisher'];
        $actor = $row['actor'];
        $category = $row['category'];
        $country = $row['country'];
        $movieid = $row['mov_id'];
echo '
    <table class = "table is-bordered">
   
      <tr>
     <td>
          <img src='.$image.' alt="Placeholder image">
        </td> 
        <td>
          '.$title.'
        </td>
        <td>
          '.$description.'
        </td>
        <td>
          '. $year.'
        </td>
        <td>
          '.$publisher.'
        </td>
        <td>
          '.$actor.'
        </td>
         <td>
          '.$category.'
        </td>
        <td>
          '.$country.'
        </td>
        <td><a href="purchase_movie.php?purchase='.$movieid.'"><input class="button is-link" type="submit" name="approve" value="Purchase"></a></td>

        
      </tr>
    
      </table>

      ';
      

}//end of WHile Loop

}//end of If Function


}//end of Function

 

if(isset($_GET['purchase'])){

  $movieid = $_GET['purchase'];
  $date = date("Y-m-d H:i:s");

  $insert_query = "INSERT INTO tblPurchase (sub_id,mov_id,datepurchased)";
$insert_query .= "VALUES('{$id}','{$movieid}','{$date}')";
$movie = mysqli_query($conn,$insert_query);


  $_SESSION['message'] = "Thank you for purchasing the movie";
  $_SESSION['msg_type'] = "success";
  header('location:purchase_movie.php');
      
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
    <title>NetWatch Purchase Menu</title>
  </head>
  <title>Purchase Movie</title>
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


<!-- Hero -->

<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Purchase Movies
      </h1>
      <h2 class="subtitle">
       Purhase a Movie Today
      </h2>
    </div>
  </div>
</section>
<!-- Hero Ends -->
<div class="container pt-2">

</div>


<div class="container">

  <?php 
  if(isset($_SESSION['message'])): ?>

<div class="notification is-<?=$_SESSION['msg_type']?>">
   
   <?php echo $_SESSION['message'];
     unset($_SESSION['message']); ?>
 
</div>

<?php endif;?>
</div>
 



<div class="container is-max-desktop">
<?php ShowMovies();?>
</div>



  </body>



<?php include('footer/footer.php'); ?>

</html>