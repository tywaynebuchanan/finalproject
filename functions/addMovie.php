<?php 
ob_start();
include ('config/dbconn.php'); 
// session_start(); // Start of session


if(isset($_POST['submit'])){

	$title = $_POST['title'];
	$description = $_POST['description'];
	$year = $_POST['year'];
	$publisher = $_POST['publisher'];
	$actors = $_POST['actors'];
	$category = $_POST['category'];
	$country = $_POST['country'];
	$duration = $_POST['duration'];
	$image = $_POST['image'];
	$movieid = $_POST['movie'];
	$videolink = $_POST['videolink'];


//Prevents user from entering empty strings into Database
if(!empty($title) && !empty($description) && !empty($year)&& !empty($publisher)&& !empty($actors) && !empty($category) && !empty($country) && !empty($duration) && !empty($image) && !empty($movieid))

{

$title = mysqli_escape_string($conn,$title);
$description = mysqli_escape_string($conn,$description);
$year = mysqli_escape_string($conn,$year);
$publisher = mysqli_escape_string($conn,$publisher);
$actors = mysqli_escape_string($conn,$actors);
$category= mysqli_escape_string($conn,$category);
$country = mysqli_escape_string($conn,$country);
$duration = mysqli_escape_string($conn,$duration);
$image = mysqli_escape_string($conn,$image);
$movieid = mysqli_escape_string($conn,$movieid);



$insert_query = "INSERT INTO tblMovies (title,description,year,publisher,actor,category,country,duration,image,mov_id,trailer)";
$insert_query .= "VALUES('{$title}','{$description}','{$year}','{$publisher}','{$actors}','{$category}','{$country}','{$duration}','{$image}','{$movieid}','{$videolink}')";
$movie = mysqli_query($conn,$insert_query);
if(!$movie){

	die("QUERY FAILED". mysqli_error($conn).''. mysqli_errno($conn));
}

$message = '<div class="notification is-success">
   Your movie was added successfully 
 
</div>';


 
 


}else{

	$message = '<div class="notification is-danger">
   Fields can not be blank
 
</div>';
}

}else {

	$message ="";
}





?>