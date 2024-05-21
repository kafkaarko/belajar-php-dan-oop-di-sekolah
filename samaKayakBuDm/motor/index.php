
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

form div {
    margin-bottom: 15px;
}

label {
    font-size: 14px;
    margin-right: 10px;
    width: 150px;
}

input[type="number"],
input[type='text'],
select {
    flex: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.sama {
    font-family: Arial, sans-serif;
    border: 1px solid #ddd;
    padding: 20px;
    margin: 20px auto;
    width: 300px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.sama h1, .sama h2, .sama h3, .sama h4, .sama h5, .sama h6 {
    text-align: center;
}

.sama p {
    margin: 10px 0;
}

.sama .header, .sama .footer {
    text-align: center;
    font-weight: bold;
    margin-bottom: 20px;
}

.sama .details {
    text-align: left;
    line-height: 1.6;
}

.sama .total {
    font-size: 1.2em;
    margin-top: 20px;
    text-align: right;
    font-weight: bold;
}

.sama .separator {
    border-top: 1px dashed #ccc;
    margin: 20px 0;
}



    </style>
</head>
<body>
    <div class="beda">
        <h1>Sewa Motor</h1>

    <form action="" method="post">
        <div style="display: flex;"> 
            <label for="nama">Masukan Nama:</label>
            <input type="text" name="nama" id="nama" require>
        </div>
        <div style="display: flex;"> 
            <label for="number">Masukan Hari:</label>
            <input type="number" name="waktu" id="number" require>
        </div>
        <div style="display: flex;">
            <label for="">Plih Motor</label>
            <select name="jenis" id="" require>
                <option value="Scoopy">scopy</option>
                <option value="Beat">beat</option>
                <option value="Vario">vario</option>
                <option value="Aerox">aeorox</option>
            </select>
        </div>
        <button type="submit" name="beli">Beli</button>
    </form>
    <?php
    //panggil filenya
    require "logicc.php";

    ?>
    </div>
</body>
</html>