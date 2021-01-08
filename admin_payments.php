<?php 
include ('functions/session.php');
include('header/admin_header.php');
include('functions/adduser.php');

function Payment_Table(){
  global $conn;
$query = mysqli_query($conn,"SELECT ts.*, tp.* FROM tblSubscribers ts, tblPayments tp WHERE ts.sub_id = tp.sub_id");
      if($query->num_rows > 0){

  while ($row = mysqli_fetch_assoc($query)){
    
    $date = date("d/m/Y",strtotime($row['datepurchased']));
    echo '
      <tr>
        <td>'.$row['paymentid'].'</td>
       <td>'.$row['firstname'].'</td>
        <td>'.$row['lastname'].'</td>
         <td>'.$date.'</td>
          <td>'.$row['packageid'].'</td>
          <td>'.$row['isActive'].'</td>
            <td>'.$row['role'].'</td>
       <td>
          <a href="admin.php?approve='.$row['sub_id'].'"><input class="button is-link" type="submit" name="approve" value="Approve"></a>
        </td>
        ';

        }
      }
    }// End of Function
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
          <a class="navbar-item" href="editusers.php">
            Edit Movie/Delete
          </a>
           <a class="navbar-item">
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


<!--Header Ends-->


  
<!--Hero Begin -->
<section class="hero is-link pb-1">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
     Payments
      </h1>
      <h2 class="subtitle">
        
      </h2>
    </div>
  </div>
</section>
<!--Hero Ends -->
<div>
  <hr>
</div>

<!-- User Table -->
<div class="container">
 <section>
   <?php if(isset($_SESSION['message'])): ?>

<div class="notification is-<?=$_SESSION["msg_type"]?>">
     <?php echo $_SESSION['message'];
     unset($_SESSION['message']); ?>
 </div>
 <?php endif;?>

 <!-- Table -->
 <div class="container is-max-desktop">
  <table class="table is-hoverable is-striped is-narrow is-bordered pt-3 is">
    <thead class="has-text-centered">
      <tr>
        <td>Payment ID</td>
        <td>First Name</td>
         <td>Last Name</td>
        <td>Date Purchased</td>
         <td>Package</td>
         <td>Is Active</td>
         <td>Role</td>
        <td>Action</td>
      </tr>
    </thead>
  <tbody>
<?php Payment_Table();?>
    </tbody>
  </table>
</section>
</div>

<!-- User Table Ends-->


<section class="container">
  
</section>
</body>

<?php include("footer/footer.php");?>
</html>