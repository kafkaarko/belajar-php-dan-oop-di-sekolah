
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .input{
            display: flex;
        }
        .btn{
            display: flex;
        }
    </style>
</head>
<body>
    <h1>Data siswa</h1>

    <form action="" method="post">
        <div class="input">

            <div class="nama">
                <label for="">nama:</label>
                <input type="text" name="nama">
            </div>
            <div class="nis">
                <label for="">nis:</label>
                <input type="number" name="nis">
            </div>
            <div class="rayon">
                <label for="">rayon:</label>
                <input type="text" name="rayon">
            </div>
        </div>
        <div class="btn">
            <div class="btn_tambah">
                <button type="submit" name="tmb">tambah</button>
            </div>
            <div class="btn_cetak">
                <button type="submit" name="cetak">cetak</button>
            </div>
            
        </div>
    </form>
    <?php
session_start();

      if(!isset($_SESSION['dataSiswa'])){
        $_SESSION['dataSiswa'] = array();
      }

      if(isset($_POST['tmb'])){
        if($_POST["nama"] == "" && $_POST["nis"] == ""  && $_POST['rayon'] == ""){
            echo "data kosong";
        }else{
            $siswa = array(
                "nama" => $_POST['nama'],
                "nis" => $_POST['nis'],
                "rayon" => $_POST['rayon']
            );
            array_push($_SESSION['dataSiswa'] , $siswa);
            // var_dump($_SESSION['dataSiswa']);
        }
    }
    if(!empty($_SESSION['dataSiswa'])){
        foreach($_SESSION['dataSiswa'] as $Key => $value){
            echo $value["nama"] . " ";
            echo $value["nis"] . " ";
            echo $value["rayon"] . "<br> ";
            echo" <form method = 'post'>
            <div class='btn_hapus'>
            <button type='submit' name='hapus'>hapus</button>
        </div>
            </form>";
        }
    if(isset($_POST['hapus'])){
        if(isset($_SESSION["siswaData"])){
            unset($_SESSION['dataSiswa']);
        }
            exit();
        
    }
    }
?>
</body>
</html>