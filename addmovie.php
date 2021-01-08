<?php ob_start();
include('functions/addMovie.php');
include ('functions/session.php');
include('header/header.php');
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
  <body>
    
<!-- Hero -->

<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Add Movie
      </h1>
      <h2 class="subtitle">
        Enter information about the movie
      </h2>
    </div>
  </div>
</section>
<!-- Hero Ends -->

<!-- Form Begins -->

<div class="container is-max-desktop">
  <?php echo $message;?>
  <form method="post" action="">
  <div class="field">
  <label class="label">Title</label>
  <div class="control">
    <input class="input" type="text" name="title" placeholder="Name of the movie">
  </div>

</div>

<div class="field">
  <label class="label">Description</label>
  <div class="control">
    <input class="textarea" type="text" name="description" placeholder="What is the movie about">
  </div>
</div>


<div class="field">
  <label class="label">Year</label>
  <div class="control">
    <input class="input" type="text" name="year" placeholder="Year of Release">
  </div>
</div>

<div class="field">
  <label class="label">Publisher</label>
  <div class="control">
    <input class="input" type="text" name="publisher" placeholder="Name of Publisher">
  </div>
</div>

<div class="field">
  <label class="label">Actors</label>
  <div class="control">
    <input class="input" type="text" name="actors" placeholder="Name of Actors">
  </div>
</div>
<div class="field">
  <label class="label">Category</label>
  <div class="control">
    <div class="select">
      <select name ="category">
        <option>Select category</option>
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
        <option>Country</option>
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
    <input class="input" type="text" name="duration" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Image</label>
  <div class="control">
    <input class="input" type="text" name="image" placeholder="Thumbnail URL">
  </div>
</div>

<div class="field">
  <label class="label">Movie Id</label>
  <div class="control">
    <input class="input" type="text" name="movie" placeholder="Movie ID">
  </div>
</div>

<div class="field">
  <label class="label">Video Link</label>
  <div class="control">
    <input class="input" type="text" name="videolink" placeholder="Video Link">
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <input class="button is-link" type="submit" name="submit" value="Add Movie">

  
    <a class="button is-link" href="home_page.php">Cancel</a>
  </div>
</div>
</div>
</form>
<!-- Login Form Ends -->
  </body>

<?php include('footer/footer.php'); ?>

</html>