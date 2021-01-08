<?php ob_start();
include('functions/addMovie.php');
include ('functions/session.php');
include('header/header.php');
include('functions/process.php');
if(!isset($_SESSION['login_user'])){
  header("location:home_page.php");
}

$query = mysqli_query($conn,"SELECT * FROM tblMovies");
      if($query->num_rows > 0){
      
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
  <title>Edit Movie</title>
  <body>
  
    
<!-- Hero -->

<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Edit/Delete
      </h1>
      <h2 class="subtitle">
        Edit or Delete information on a movie
      </h2>
    </div>
  </div>
</section>
<!-- Hero Ends -->
<div class="container pt-2">

</div>


<div class="container is-max-desktop">
  <?php 
  if(isset($_SESSION['message'])): ?>

<div class="notification is-success">
   
   <?php echo $_SESSION['message'];
   unset($_SESSION['message']); ?>
 
</div>
 <?php endif;?>
  <section>
  <table class="table is-hoverable is-striped is-narrow is-bordered">
    <thead>
      <tr>
        <!-- <td></td> -->
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
    </thead>
<?php
     while ($row = mysqli_fetch_assoc($query))

       {
?>
    <tbody>
      <tr>
        <!-- <td>
          <img src="<?php echo $row['image'];?>" alt="Placeholder image">
        </td> -->
        <td>
          <?php echo $row['title'];?>
        </td>
        <td>
          <?php echo $row['description'];?>
        </td>
        <td>
          <?php echo $row['year'];?>
        </td>
        <td>
          <?php echo $row['publisher'];?>
        </td>
        <td>
          <?php echo $row['actor'];?>
        </td>
         <td>
          <?php echo $row['category'];?>
        </td>
        <td>
          <?php echo $row['country'];?>
        </td>
        <td>
          <a href="edit_movie.php?edit=<?php echo $row['id'];?>"><input class="button is-link" type="submit" name="edit" value="Edit"></a>
          


        </td>
        <td><a href="editmovie.php?delete=<?php echo $row['id'];?>"><input class="button is-danger" type="submit" name="delete" value="Delete"></a></td>

        
      </tr>
<?php }?>
    </tbody>
  </table>
</section>
</div>
  </body>

<!-- <div class="container pt-2">

</div> -->


<?php include('footer/footer.php'); ?>

</html>