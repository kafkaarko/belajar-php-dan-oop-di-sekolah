<?php
session_start();
if(!isset($_GET['key'])){
    header('Location: data.php');
    exit();
}

$key = $_GET['key'];

if(!isset($_SESSION['dataSiswa'][$key])){
    header('Location: data.php');
    exit();
}

$siswa = $_SESSION['dataSiswa'][$key];

if (isset($_POST['tmb'])) {
    if ($_POST["nama"] != "" && $_POST["nis"] != "" && $_POST['rayon'] != "") {
        $_SESSION['dataSiswa'][$key] = array(
            "nama" => $_POST['nama'],
            "nis" => $_POST['nis'],
            "rayon" => $_POST['rayon']
        );
        header("Location: data.php");
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = 'update.php?key=$key';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 20px;
        }

        .input {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
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
            justify-content: center;
        }

        .btn_tambah button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn_tambah button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Ubah Data Siswa</h1>
        <form action="" method="post">
            <div class="input">
                <div class="nama">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($siswa['nama']); ?>">
                </div>
                <div class="nis">
                    <label for="nis">NIS:</label>
                    <input type="number" name="nis" id="nis" value="<?php echo htmlspecialchars($siswa['nis']); ?>">
                </div>
                <div class="rayon">
                    <label for="rayon">Rayon:</label>
                    <input type="text" name="rayon" id="rayon" value="<?php echo htmlspecialchars($siswa['rayon']); ?>">
                </div>
            </div>
            <div class="btn">
                <div class="btn_tambah">
                    <button type="submit" name="tmb">Ubah</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
