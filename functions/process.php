<?php 
ob_start();
include ('config/dbconn.php'); 



$title = '';
		$description = '';
		$year = '';
		$publisher = '';
		$actors = '';
		$category = '';
		$country = '';
		$duration = '';
		$image = '';

if(isset($_GET['edit'])){

	$id = $_GET['edit'];
	$result = mysqli_query($conn,"SELECT * FROM tblMovies WHERE id = $id");
	if($result->num_rows > 0)
	{
		$row = $result->fetch_array();
		
		$title = $row['title'];
		$description = $row['description'];
		$year = $row['year'];
		$publisher = $row['publisher'];
		$actors = $row['actor'];
		$category = $row['category'];
		$country = $row['country'];
		$duration = $row['duration'];
		$image = $row['image'];
	}
}

if(isset($_GET['delete'])){

	$id = $_GET['delete'];
	$result_delete = mysqli_query($conn,"DELETE FROM tblMovies WHERE id = $id");
	$_SESSION['message'] = "Record has been deleted";
		
	
}


if(isset($_POST['save'])){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$year = $_POST['year'];
	$publisher = $_POST['publisher'];
	$actors = $_POST['actors'];
	$category = $_POST['category'];
	$country = $_POST['country'];
	$duration = $_POST['duration'];
	$image = $_POST['image'];

if(!empty($title) && !empty($description) && !empty($year)&& !empty($publisher)&& !empty($actors) && !empty($category) && !empty($country) && !empty($duration) && !empty($image) )
{

$insert_query = mysqli_query($conn,"UPDATE tblMovies SET title = '".$title."', description = '".$description."', year = '".$year."', publisher = '".$publisher."', actor = '".$actors."', category = '".$category."', country = '".$country."', duration = '".$duration."',image = '".$image."' WHERE id = $id");

$movie = $insert_query->fetch_assoc();
if(!$movie){

	die("QUERY FAILED". mysqli_error($conn).''. mysqli_errno($conn));
}

$_SESSION['message']= "Your movie has been successfully edited";
header("location: editmovie.php");//Redirects page after movie is edited
$title = '';
		$description = '';
		$year = '';
		$publisher = '';
		$actors = '';
		$category = '';
		$country = '';
		$duration = '';
		$image = '';

}else {
	$_SESSION['message_ifblank'] = "Fields can not be blank";
}
}





	// global $conn;

if(isset($_POST['search']))


{

$searchKey = $_POST['keyword'];
  $search_query = ("SELECT * From tblMovies WHERE title LIKE '%$searchKey%'");
  $result = mysqli_query($conn,$search_query);
 
   while ($row1 = mysqli_fetch_assoc($result)){


   	$title = $row1['title'];
   	$image = $row1['image'];
   	$movid = $row1['mov_id'];



  echo ' 

  <div class="container is-max-desktop">
  <table class="table has-text-centered is-bordered">
    
    <tr>

    <td><figure class="image is-48x48">
                <img src="'.$row1['image'].'" alt="Placeholder image">
              </figure></td>
    
      <td class="has-text-centered">'.$title.'</td>
      <td>'.$row1['year'].'</td>
      <td><form method = "post" action = "process.php"<input class="button is-success"type="submit" name="purchase" value="Purchase"></form></td>
    </tr>


  </table>
 </div>';
}

} //end of If Statement

 if(isset($_POST['purchase'])){


$insert_query = "INSERT INTO tblPurchase(sub_id,mov_id)";
$insert_query .= "VALUES('{$id}','{$movid}')";
$payment = mysqli_query($conn,$insert_query);
if(!$payment){

	die("QUERY FAILED". mysqli_error($conn).''. mysqli_errno($conn));
}
$_SESSION['message']= "You have purhcase the movie";
$_SESSION['msg_type'] = "success";
// header("location: admin.php");//Redirects page after movie is edited
}else{

$_SESSION['error'] = "Fields can not be blank";
$_SESSION['msg_type'] = "danger";

}













?>