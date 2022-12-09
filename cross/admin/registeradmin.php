<?php 
include 'header.php';
include 'ft.php';
include 'db.php';
 ?>

 <!-- registertaion form -->
<div class="container">
	<div class="head" style="text-align: center;">
		<h1>Админ бүртгэх</h1>
	</div>
	<form action="registeradmin.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Нэвтрэх нэр</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Нууц үг</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">илгээх</button>
</form>
</div>
 <!-- reg end -->

 <?php 
if (isset($_POST['submit'])) {

	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$hash = password_hash("$pwd", PASSWORD_BCRYPT);

	$query = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$uname','$hash')";
	$run = mysqli_query($con,$query);
	if ($run) {
		echo "<script>alert('Admin Successfully Added.. :)');window.location.href='adminlist.php';</script>";

	}
	else{
		echo "something wrong";
	}
}


  ?>