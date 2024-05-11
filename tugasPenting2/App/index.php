<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.main {
    max-width: 1600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.judul {
    text-align: center;
    margin-bottom: 20px;
}

.judul h1 {
    color: #333;
}

.pelanggan,
.waktu,
.motor {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #666;
}

input[type="text"],
select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #fff;
    color:#007bff;
}

.name {
    margin: 10px
}

.error {
    color: #ff0000;
    margin-top: 5px;
}
/* Style untuk elemen 'nama' */
.nama {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
}

/* Style untuk judul 'anda berlangganan disini dan anda mendapat kan diskon' */
.nama h3 {
    color: #007bff;
    font-size: 18px;
    margin-bottom: 10px;
}

/* Style untuk paragraf */
.nama p {
    margin-bottom: 10px;
    font-size: 16px;
}

/* Style untuk harga */
.nama p:last-child, .nama h3:last-child {
    margin-bottom: 0;
}

/* Style untuk tombol */
.nama button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.nama button:hover {
    background-color: #0056b3;
}



    </style>
</head>
<body>
    <div class="main">
        <div class="judul">
            <h1>Rental Motor</h1>
        </div>
        <div class="main">
            <form action="" method="post">
                <div class="pelanggan">
                    <label for="">NAMA PELANGGAN:</label>
                    <input type="text" name="pelanggan" id="plgn">
                </div>
                <div class="waktu">
                    <label for="">Lama Waktu Rental(perhari)</label>
                    <input type="text" name="waktu" id="wkt">
                </div>
                <div class="motor">
                    <label for="">Jenis Motor:</label>
                    <select name="motor" id="motor">
                        <option value="vario">Vario</option>
                        <option value="beat">Beat</option>
                        <option value="supra">Supra bapa</option>
                    </select>
                    <div class="name">
                        <button type="sumbit" name="submit">submit</button>
                    </div>
                </div>
            </form>
            <?php
            require "logic/Motor.php";
            ?>
        </div>
    </div>
    
</body>
</html>