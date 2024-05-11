<?php
$box = "";
if( isset ($_GET["submit"])){
  $box = $_GET["box"];
}

if(isset($_GET["submit"])){
  switch($box){ 
  case"halaman_2": 
    include 'halaman_2.php';
    break;
  case"halaman_3":
      include 'halaman_3.php';
      break;
  default:
      echo"halaman_1.php";
      break;
  }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    <input type="text" name="box">
    <button type="submit" name="submit">pencet</button>
  </form>
</body>
</html>