<?php 
include ("functions/data_session.php");

// if(isset($_POST['change'])){

//   $data_package = $_POST['package'];
//   $result_update = mysqli_query($conn,"UPDATE tblPayments SET packageid =$data_package WHERE sub_id = $id");
//   $_SESSION['message'] = "The subscriber has been approved";
//   $_SESSION['msg_type'] = "success";
      
// }

$query = mysqli_query($conn,"SELECT * FROM tblPayments WHERE sub_id =$id");
      if($query->num_rows > 0){
  

?>
<?php 

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
            Purchase a Package
          </a>
          <a class="navbar-item" href="">
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
          <a class="navbar-item">
            Current Packages<span class="tag is-link">1</span>
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
       Account Settings
      </h2>
    </div>
  </div>
</section>
<!--Hero Ends -->



<!--Section Begin-->
<div class="container">
    <hr>
    <h2 class="title">Packages</h2>
</div>
<!--Section Ends-->

<!-- Table Begins -->
<div class="container">
  <form method="POST" action="account_page.php">
<table class="table is-hoverable is-striped is-narrow is-bordered pt-3">
    <thead class="has-text-centered">
      <?php while ($row = mysqli_fetch_assoc($query)){
    
    $package = $row['packageid'];
    ?>
      <tr>
                 <td>
     Current Package
        </td>
        <td><?php echo $package?></td>
        <td>
          <div class="select">
          <select name="package">
        <option value="<?echo $package?>">--Select Package</option>
        <option value="PREM">Premuim</option>
        <option value="STND">Standard</option>
        
      </select>
    </div></td>
         <td><a><input class="button is-link" type="submit" name="change" value="Change"></a></td>
      
      </tr>
    </thead>
    <tbody>
        
      <tr>

    

      
       
      </tr>
<?php }


?>
    </tbody>
  </table>
</form>
</section>
</div>
</div>
<!-- User Table Ends-->
  
  </body>
<?php

  }else{
    echo'No Movies';
  }

   $conn->close(); // Close database connection


?>

<?php include('footer/footer.php'); ?>


</html>