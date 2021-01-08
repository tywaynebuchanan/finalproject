
<script src="https://kit.fontawesome.com/23bd622209.js" crossorigin="anonymous"></script>


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




<!--End of NavBar-->
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
          <a class="navbar-item" href="addmovie.php">
           Add a Movie
          </a>
          <a class="navbar-item" href="editmovie.php">
            Edit Movie/Delete
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <a class="navbar-item">
            Account Settings
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
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