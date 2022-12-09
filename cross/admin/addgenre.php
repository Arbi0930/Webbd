<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
 	<div class="head">
 		
 		<div class="jumbotron">
  <h1 class="display-4">Төрөл нэмэх</h1>
  <p class="lead">Төрөл нэмэх эсвэл ангилалын  ID</p>
  <hr class="my-4">
  <form action="addgenre.php" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" name="genrename" class="form-control" placeholder="Төрөлийн нэр">
    </div>
    <div class="col">
      <input type="text" name="cat_id" class="form-control" placeholder="Ангилал ID ">
    </div>
 <div class="col">
      <input type="text" name="genre_id" class="form-control" placeholder="Төрөл ID ">
    </div>
  </div>
  <br><br>
  <button class="btn btn-primary btn-lg" name="submit">Төрөл нэмэх</button>
</form>
</div>
 	</div>
 </div>

 <?php 

if (isset($_POST['submit'])) {
	$gename = $_POST['genrename'];
	$catid = $_POST['cat_id'];
	$genre= $_POST['genre_id'];

	$query = "INSERT INTO `genre`( `genre_name`, `category_id`, `genreid`) VALUES ('$gename',$catid,$genre)"; 
	$run = mysqli_query($con,$query);
	if ($run) {
		echo "<script>alert('Genre Successfully Added.. :)');window.location.href='genrelist.php';</script>";
	}
	else{
		echo "<script>alert('Something Went Wrong :(');window.location.href='addgenre.php';</script>";
	}

}

  ?>