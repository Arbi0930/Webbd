<?php 

include 'header.php';
include 'ft.php';
include '../../db.php';
 ?>

 <div class="container">
 	<div class="head">
 		
 		<div class="jumbotron">
  <h1 class="display-4">Ангилал нэмэх</h1>
  <p class="lead">Төрөл нэмэх эсвэл ангилалын  ID</p>
  <hr class="my-4">
  <form action="addcategory.php" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" name="catname" class="form-control" placeholder="Ангилалын нэр">
    </div>
   
 <div class="col">
      <input type="text" name="catid" class="form-control" placeholder="Ангилал ID ">
    </div>
     <div class="col">
      <input type="text" name="genid" class="form-control" placeholder="Төрөл ID ">
    </div>
  </div>
  <br><br>
  <button class="btn btn-primary btn-lg" name="submit">Aнгилал нэмэх</button>
</form>
</div>
 	</div>
 </div>
 <?php 

 if (isset($_POST['submit'])) {
 	$catname = $_POST['catname'];
 	$catid = $_POST['catid'];
  $genre = $_POST['genid'];

 	$query = "INSERT INTO `category`(`category_id`, `category_name`, `genre_id`) VALUES ($catid,'$catname',$genre)";
 	$run = mysqli_query($con,$query);
 	if ($run) {
 		echo "<script>alert('Category Successfully Added.. :)');window.location.href='categorylist.php';</script>";
 	}
 	else{
 		 		echo "<script>alert('There Was A Problem While adding Category'); window.location.href='addcategory.php';</script>";

 	}
 }

  ?>