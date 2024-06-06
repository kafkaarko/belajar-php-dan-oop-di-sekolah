<?php
session_start();

if(isset($_POST['hapus'])){
    if(isset($_POST['hapus_key'])){
        $key = $_POST['hapus_key']; // Mengambil kunci dari form
        unset($_SESSION['dataSiswa'][$key]); // Menghapus data sesuai kunci
        header('Location: ' . $_SERVER['PHP_SELF']); // Redirect kembali ke halaman ini setelah penghapusan
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            color: #333;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }

        .input {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .input label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .input input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: calc(100% - 22px);
        }

        .btn {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: blue;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn button:hover {
            background-color: #fff;
            color: blue;
        }

        .siswa-list {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .siswa-list div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .siswa-list p {
            margin: 0;
            color: #333;
        }

        .siswa-list form {
            display: inline;
        }

        .siswa-list button {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            background-color: #dc3545;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .siswa-list button:hover {
            background-color: #c82333;
        }

        .siswa-list .ubah-button {
            background-color: #28a745;
        }

        .siswa-list .ubah-button:hover {
            background-color: #218838;
        }
        @media print{
            .form-container{
                display: none;
            }
        }
    </style>
</head>
<body>
    <h1>Data siswa</h1>

    <div class="form-container">
        <form action="" method="post">
            <div class="input">
                <div class="nama">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="nis">
                    <label for="nis">NIS:</label>
                    <input type="number" name="nis" id="nis">
                </div>
                <div class="rayon">
                    <label for="rayon">Rayon:</label>
                    <input type="text" name="rayon" id="rayon">
                </div>
            </div>
            <div class="btn">
                <div class="btn_tambah">
                    <button type="submit" name="tmb">Tambah</button>
                </div>
                <div class="btn_cetak">
                    <button type="button" name="cetak" onclick="window.print()">Cetak</button>
                </div>
            </div>
        </form>
    </div>

    <h2>Daftar Siswa</h2>
    <div class="siswa-list">
    <?php
    if(!isset($_SESSION['dataSiswa'])){
        $_SESSION['dataSiswa'] = [];
    }

    if(isset($_POST['tmb'])){
        if($_POST["nama"] == "" || $_POST["nis"] == "" || $_POST['rayon'] == ""){
            echo "Data kosong";
        }else{
            $siswa = array(
                "nama" => $_POST['nama'],
                "nis" => $_POST['nis'],
                "rayon" => $_POST['rayon']
            );
           $sama = false;
           foreach($_SESSION['dataSiswa'] as $ds){
            if($ds['nama'] == $siswa['nama'] && $ds['nis'] == $siswa['nis'] && $ds['rayon'] == $siswa['rayon']){
                $sama = true;
                break;
            }
           }
           if ($sama) {
            echo "Data ini sudah ada, tulis data lain";
        } else {
            array_push($_SESSION['dataSiswa'], $siswa);
             }
         }
    }
  

    
    ?>
        <?php if (!empty($_SESSION['dataSiswa'])): ?>
            <?php foreach ($_SESSION['dataSiswa'] as $key  => $value): //key = 1?> 
                <div>
                    <p><?php echo htmlspecialchars($value['nama']); ?> - <?php echo htmlspecialchars($value['nis']); ?> - <?php echo htmlspecialchars($value['rayon']); ?></p>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="hapus_key" value="<?php echo $key; ?>">
                        <button type="submit" name="hapus">Hapus</button>
                    </form>
                    <form method="get" action="update.php" style="display:inline;">
                        <input type="hidden" name="key" value="<?php echo $key; ?>">
                        <button type="submit" class="ubah-button">Ubah</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada data siswa.</p>
        <?php endif; ?>
    </div>
</body>
</html>
