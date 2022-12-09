<?php 

include 'header.php';
include 'ft.php';
include'db.php';
 ?>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Хүсэлтүүд</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	 <ul class="navbar-nav ml-auto">
  	 	      <li class="nav-item">
        <a class="btn btn-warning text-light" href="comlistcon.php">Хүсэлтийг бөглөнө үү</a>
      </li>
  	 </ul>
    
  </div>
</nav>
</div>

 <div class="container" style="text-align: center;">
 	<center><h1>Холбоо барих жагсаалт</h1></center>
 	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Нэр</th>
      <th scope="col">Мэйл</th>
      <th scope="col">Мэссэж</th>
      <th scope="col">Сэтгэгдэл</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  	$query = "select * from contactus";
  	$run = mysqli_query($con,$query);
  	if ($run) {
  		while ($row=mysqli_fetch_assoc($run)) {
  			?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['uname']; ?></td>
      <td><?php echo $row['mail']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><a class="btn btn-info" href="compcontact.php?id=<?php echo$row['id'] ?>">Амжилттай</a>
      	&nbsp; <a class="btn btn-danger" href="deletecon.php?id=<?php echo$row['id'] ?>">устгах</a></td>
    </tr>
   	<?php
  		}
  	}
  	 ?>
  </tbody>
</table>
 </div>