<?php ob_start();
include('functions/addMovie.php');
include ('functions/session.php');
include('header/header.php');
include('functions/process.php');
if(!isset($_SESSION['login_user'])){
  header("location:home_page.php");
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


<!-- Form Begins -->

<div class="container is-max-desktop">
   <?php 
  if(isset($_SESSION['message_ifblank'])): ?>

<div class="notification is-success">
   
   <?php echo $_SESSION['message_ifblank'];
   unset($_SESSION['message_ifblank']); ?>
 
</div>
 <?php endif;?>
  <form method="post" action="">
  <div class="field">
  <label class="label">Title</label>
  <div class="control">
    <input class="input" type="text" name="title" placeholder="Name of the movie" value="<?php echo $title;?>">
  </div>

</div>

<div class="field">
  <label class="label">Description</label>
  <div class="control">
    <input class="textarea" type="text" name="description" placeholder="What is the movie about"
    value="<?php echo $description;?>">
  </div>
</div>


<div class="field">
  <label class="label">Year</label>
  <div class="control">
    <input class="input" type="text" name="year" placeholder="Year of Release" value="<?php echo $year;?>">
  </div>
</div>

<div class="field">
  <label class="label">Publisher</label>
  <div class="control">
    <input class="input" type="text" name="publisher" placeholder="Name of Publisher" value="<?php echo $publisher;?>">
  </div>
</div>

<div class="field">
  <label class="label">Actors</label>
  <div class="control">
    <input class="input" type="text" name="actors" placeholder="Name of Actors" value="<?php echo $actors;?>">
  </div>
</div>

<div class="field">
  <label class="label">Category</label>
  <div class="control">
    <div class="select">
      <select name ="category">
        <option value="<?php echo $category?>">Select category</option>
        <option value="Action">Action</option>
        <option value="Horror">Horror</option>
        <option value="Drama">Drama</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Country</label>
  <div class="control">
    <div class="select">
      <select name="country">
        <option value="<?php echo $country;?>">Country</option>
        <option value="USA">USA</option>
        <option value="FRANCE">FRANCE</option>
        <option value="UK">UK</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Duration</label>
  <div class="control">
    <input class="input" type="text" name="duration" placeholder="" value="<?php echo $duration;?>">
  </div>
</div>

<div class="field">
  <label class="label">Image</label>
  <div class="control">
    <input class="input" type="text" name="image" placeholder="Thumbnail URL" value="<?php echo $image;?>">
  </div>
</div>

<div class="field">
  <label class="label">Image</label>
  <div class="control">
    <input class="input" type="text" name="videolink" placeholder="Video" value="<?php?>">
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <input class="button is-success" type="submit" name="save" value="Save Changes">

  
    <a class="button is-danger" href="editmovie.php">Cancel</a>
  </div>
</div>
</div>
</form>
<!-- Login Form Ends -->

  </body>

<?php include('footer/footer.php'); ?>

</html>