

<?php 
include 'db.php';
include 'ft.php';
session_start();
// if (isset($_SESSION[' Амжилттай нэвтэрлээ'])) {}
// 	else{
// 		echo "<script>alert('Та нэвтрээгүй байна эхлээд нэвтэрэнэ үү?');window.location.href='login.php';</script>";
		
// 	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>М-Кино</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body {
  margin: 0;
   
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #140d14;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #140d14;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<!-- nav -->
<div class="container">
  
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Тавтай морил,<?php echo $_SESSION['user']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Эхлэл</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registeradmin.php">Админ бүртгэх</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlist.php">Админы жагсаалт</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="movielist.php">Кино</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Холбогдох</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="categorylist.php">Ангилал</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genrelist.php">Төрөл</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-danger" href="logout.php">Гарах</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navend -->
<div class="sidebar">
  <a  href="index.php">Эхлэл</a>
  <a href="movielist.php">Кино</a>
  <a href="contact.php">Холбогдох</a>

  <a href="adminlist.php">Админ</a>
  <a href="categorylist.php">Ангилал</a>
  <a href="genrelist.php">Төрөл</a>

</div>

