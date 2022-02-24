<?php require_once "blocks/header.php"?>
<style>
.card {
width: 30%;
margin-left: 3%;
}
	
	
	
	
</style>
<div class="container mt-5" align="center">
<div class="d-flex flex-wrap">
<?php
require_once("php/connect.php");
if($mysql == false){
	echo "!";
	echo mysqli_connect_errno();
	exit();
}
<?php
    $mysql = new mysqli('localhost', 'root', '', 'portal');
    $search = $_GET['searchinput'];
    $sql = "SELECT * FROM candidates WHERE fio LIKE '%$search%'";
    $authors = $mysql->query($sql);
    while ($author = $authors->fetch_assoc()) :
    ?>
  <main class="sd">
        <div class="container">
            <div class="searchres">
                <div class="resultitem">
                    <img src="<?=$author['img']; ?>" alt="">
                    <div class="content">
                        <h1><?= $author['fio']; ?></h1>
                    </div>
                </div>
                <?php endwhile;
                ?>
$query = mysqli_query($mysql, "SELECT * FROM `teachers`");
if(mysqli_num_rows($query) == 0){
	echo ".";
}	else {
  for ($i=0; $i <=9 ; $i++){
while($article = mysqli_fetch_assoc($query)){
	echo
  '<div class="card mb-4 shadow-sm">  <div class="card-header">
  <h4 class="my-0 font-weight-normal">'
  .$article['teacher_name'].'</a></h4><br></div>';
  echo '<div class="card-body"><img src="'.$article['pic'].'""class="img-thumbnail"
width = "300px" height = "300px"><br>
  <ul class="list-unstyled mt-3 mb-4">
  <li><p style="color: gold; font-size: 250%;">'.$article['teacher_rating'].'</p></li>
  </ul>
  <a href=page.php?id='.$article['id_teacher'].'>
  <button type="button" class="btn btn-lg btn-block">Подробнее</button></a>

  </div></div>';

}
echo '</div></div>';
}
	}
?>
