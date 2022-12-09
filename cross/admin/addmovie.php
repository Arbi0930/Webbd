<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
	<div class="jumbotron">
		<form action="valinewpost.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="mv_name" class="form-control" placeholder="Кино нэр оруулна уу" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_m_desc" class="form-control" placeholder="Киноны тайлбар" >
  </div>
    <div class="form-group">
   
    <input type="text" name="mv_m_tag" class="form-control" placeholder="Мета таг оруулна уу" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_link1" class="form-control" placeholder="Эхний линк" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_link2" class="form-control" placeholder="Хоёрдох линк >
  </div>
  <div class="form-group">
   
    <input type="date" name="mv_date" class="form-control" placeholder="Он сөр өдөр">
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_lang" class="form-control" placeholder="Киноны хэл" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_director" class="form-control" placeholder="Зохиолч" >
  </div>
  <div class="form-group">
   
    <input type="text" name="cat_id" class="form-control" placeholder="Ангилалын ID" >
  </div>
  <div class="form-group">
   
    <input type="text" name="genre_id" class="form-control" placeholder="Төрөл ID" >
  </div>
   <div class="custom-file">
    <input type="file" name="img" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Файл сонгох</label>
  </div>
  <br>
  <br>
  <br>
  <div class="form-group">
   <textarea type="text" name="mv_desc" class="form-control" placeholder="Товч танилцуулгыг оруулна уу" rows="4"></textarea>
    
  </div>


  <button type="submit" name="submit" class="btn btn-info btn-lg">Илгээх</button>
</form>
	</div>
</div>