<?php 

$nilai = "";

if(isset($_POST["submit"])){
    $nilai = $_POST['jawaban'];
}

if(isset($_POST['submit'])){
    if($nilai >= 80){
        print" nilai A";
        echo"<br>";
        print"$nilai";
    }elseif($nilai >=68){
        echo"nilai B";
        echo"<br>";
        print"$nilai";
    }elseif($nilai >=56){
        echo" nilai C";
        echo"<br>";
        print"$nilai";
    }elseif($nilai >=45){
        echo" nilai D";
        echo"<br>";
        print"$nilai";
    }else{
        echo"E";
        echo"<br>";
        print"$nilai";
    }
    echo"<br>";
    if($nilai >= 56){
        print" anda dinyatakan lulus";
    }else{
        echo" anda dinyatakan tidak lulus";
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
    <form action="" method="post">
        <input type="number" name="jawaban">
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>