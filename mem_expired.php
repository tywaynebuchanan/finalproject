<?php 
ob_start();
session_start();
 include ('config/dbconn.php'); 

if(isset($_GET['edit'])){

  $id = $_GET['edit'];
  $result = mysqli_query($conn,"SELECT * FROM tblSubscribers WHERE sub_id = $id");
  if($result->num_rows > 0)
  {
    $row = $result->fetch_array();
    
    $_SESSION['sub_id']= $row['sub_id'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
        
  }

}

if(isset($_POST['payment'])){

 $sub_id = $_SESSION['sub_id'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $paymentid = rand(2020,3000);//This generates a random id for the payments made
  $packageid = $_POST['package'];

  if($packageid =="PREM"){
    $amount = '30';
    }else{
      $amount ='20';
    }
  

$insert_query = "INSERT INTO tblPayments (paymentid,sub_id,firstname,lastname,amount,packageid)";
$insert_query .= "VALUES('{$paymentid}','{$sub_id}','{$firstname}','{$lastname}','{$amount}','{$packageid}')";
$payments = mysqli_query($conn,$insert_query);
if(!$payments){

  die("QUERY FAILED". mysqli_error($conn).''. mysqli_errno($conn));
}
$_SESSION['message']= "Thank you for the payment. The admin will validate your account";
$_SESSION['msg_type'] = "success";

}else{

$_SESSION['error'] = "Fields can not be blank";
$_SESSION['msg_type'] = "danger";


}








// $payment_query 


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
    <a class="navbar-item" href="index.php">
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
</nav>
</div>


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



<!--Section Begin-->
<section class="section">
    <div class="container">
      <h1 class="title">Subscription</h1>
      <h2 class="subtitle">
        Make a payment 
      </h2>
    </div>
  </section>
<!--Section Ends-->


<!-- Form Begins-->
<div class="container is-max-desktop">


    <?php 
  if(isset($_SESSION['message'])): ?>

<div class="notification is-<?=$_SESSION["msg_type"]?>">
   
   <?php echo $_SESSION['message'];
     unset($_SESSION['message']); ?>

</div>
 
 <?php endif;?>



<form method="post" action="mem_expired.php">


  <div class="field">
  <label class="label">Package</label>
  <div class="control">
    <div class="select">
      <select name ="package">
        <option>Select package</option>
        <option value="PREM">Premium(Most Popular)</option>
        <option value="STND">Standard</option>
        
      </select>
    </div>
  </div>
</div>


  <div class="field">
  <label class="label">Full Name on Card</label>
  <div class="control">
    <input class="input" type="text" name="title" placeholder="Full Name on card" value="">
  </div>

</div>


 <label class="label">Card Number</label>
<div class="field has-addons ">
  <p class="control is-expanded">
    <input class="input" type="text" name="description" maxlength="12" placeholder="XXXX XXXX XXXX XXXX">
  </p>
  <p class="control">
    <a class="button is-static">
     <i class="fab fa-cc-visa"></i>
   </a>
   <a class="button is-static">
     <i class="fab fa-cc-mastercard"></i>
    </a>
    <a class="button is-static">
     <i class="fab fa-cc-paypal"></i>
    </a>
  </p>
</div>


<div>
    <label class="label">Expiration Date</label>
  </div>

<div class="field is-grouped">

    <div class="control">
      <input class="input" type="text" name="month" placeholder="MM" maxlength="2" value="">
    </div>
    <div class="control">
      <p> / </p>
    </div>
    <div class="control">
      <input class="input" type="text" name="year" placeholder="YY" maxlength="2" value="">
    </div>
 <div>
     <label class="label">CVV</label>
   </div>
     <div class="control">
      <input class="input" type="text" name="cvv" placeholder="CVV" maxlength="3" value="">
    </div>
</div>

<!-- <div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
      Save this payment method
    </label>
  </div>
</div> -->

<div class="field is-grouped">
  <div class="control">
    <input class="button is-link" type="submit" name="payment" value="Make Payment">

  
    <a class="button is-danger" href="index.php">Cancel Payment</a>
  </div>
</div>
</div>
</form>
</div>
<!-- Login Form Ends -->




<!--Form Ends-->
 
  
    <section class="section">
        <div class="container">
         
        </div>
    </section>
  
  </body>


<?php include('footer/footer.php'); ?>


</html>