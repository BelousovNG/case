<?php
require_once("php/connect.php");
if($mysql == false){
	echo "";
	echo mysqli_connect_errno();
	exit();
}
$page = $_GET['id'];
//echo $page;
$query = mysqli_query($mysql, "SELECT * FROM `teachers` WHERE id_teacher='$page' ");
?>
<!doctype html>
<br>

<br>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Об учителе</title>
</head>
<body>
<?php
$article = mysqli_fetch_assoc($query);
?>
<div class="container mt-5" align="center">
<div class="d-flex flex-wrap">
<div class="card mb-5 shadow-sm">
  <div class="card-header">
    <h2 class="mb-5"><?echo $article['teacher_name'];?></h2>
  </div>
  <div class="card-body">
    <img src="<?php echo $article['pic']; ?>." class="img-thumbnail" width = "50%">
  <ul class="list-unstyled mt-3 mb-4">
    <li><p style="color: gold; font-size: 250%;"><? echo $article['teacher_rating']?></p></li>
  <li style="text-align: left;"><?echo $article['teacher_content'];?></li>
  </ul>
  <a href="teachers.php"><button type="button" class="btn btn-lg btn-block">Назад</button></a>
  </div>
</div>
</div>
</div>
</body>
</html>
