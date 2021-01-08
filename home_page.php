<?php 
include ('functions/sub_session.php');
include('header/header.php');

$query = mysqli_query($conn,"SELECT * FROM tblMovies");
      if($query->num_rows > 0){
       while ($row = mysqli_fetch_assoc($query))
       {
        $title = $row['title'];
        $image = $row['image'];
         $year = $row['year'];
         $description = $row['description'];
         $actors = $row['actor'];
}
?>


<!Doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>NetWatch Login</title>
  </head>
  <body>
    
  
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

 <section class="section">
      <div class="container">
  
  
          <div class="columns">
            <div class="column">
             <div class="card">
            <div class="card-image">
              <figure class="image is-2by3">
                <img src="<?php echo $image?>" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <p class="title is-4"><?php echo $title?></p>
                  <p class="subtitle is-6"><?php echo $year?></p>
                </div>
              </div>

              <div class="content">
                Description
                <p class="subtitle is-6"><?php echo $description?></p>
                Actors
                <p class="subtitle is-6"><?php echo $actors?></p>
              </div>
            </div>
          </div>
            </div>
            <div class="column">
              <div class="card">
            <div class="card-image">
              <figure class="image is-2by3">
                <img src="https://i.pinimg.com/564x/5a/4d/6c/5a4d6cbd863e3631971849b2b8abed7e.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <p class="title is-4"><?php echo $title?></p>
                  <p class="subtitle is-6"><?php echo $year?></p>
                </div>
              </div>

              <div class="content">
                Description
                <p class="subtitle is-6"><?php echo $description?></p>
                Actors
                <p class="subtitle is-6"><?php echo $actors?></p>
              </div>
            </div>
          </div>
            </div>
            <div class="column">
              <div class="card">
            <div class="card-image">
              <figure class="image is-2by3">
                <img src="https://i.pinimg.com/564x/d1/c6/cc/d1c6ccd5257312fcb467c1ae50354ff1.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">John Smith</p>
                  <p class="subtitle is-6">@johnsmith</p>
                </div>
              </div>

              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
          </div>
            </div>
            <div class="column">
             <div class="card">
            <div class="card-image">
              <figure class="image is-2by3">
                <img src="https://i.pinimg.com/564x/86/d1/32/86d1323dbffb8b41fcfe678e1bc9be5e.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">John Smith</p>
                  <p class="subtitle is-6">@johnsmith</p>
                </div>
              </div>

              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
          </div>
            </div>
          </div>
                             
        </div>       
     </section>
  
    <section class="section">
        <div class="container">
         
        </div>
    </section>
  
  </body>
<?php

  }else{
    echo'No Movies';
  }

   $conn->close(); // Close database connection


?>

<?php include('footer/footer.php'); ?>


</html>