
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Container Styles */
.main {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
}

/* Heading Styles */
h1 {
    text-align: center;
    margin-bottom: 20px;
}

/* Form Styles */
.form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Label Styles */
label {
    display: block;
    margin-bottom: 5px;
}

.select{
    display: flex; 
    margin-right: 10px;
}

/* Input Styles */
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    
}

/* Button Styles */
button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Message Styles */
#p {
    margin-top: 10px;
    font-size: 14px;
    color: #007bff;
}
/* CSS untuk elemen bukti transaksi */
#bukti { 
    background-color: #f9f9f9; /* Warna latar belakang */
    padding: 20px; /* Ruang dalam */
    border-radius: 5px; /* Sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan */
    margin-top: 20px; /* Jarak atas */
}

#bukti h3 {
    font-size: 18px; /* Ukuran font judul */
    color: #333; /* Warna teks */
    margin-bottom: 10px; /* Jarak bawah */
}

#bukti p {
    font-size: 16px; /* Ukuran font teks */
    color: #666; /* Warna teks */
    margin-bottom: 8px; /* Jarak bawah */
}

#bukti hr {
    border: none; /* Hilangkan garis */
    border-top: 1px dashed #ccc; /* Garis putus-putus */
    margin-top: 15px; /* Jarak atas */
    margin-bottom: 15px; /* Jarak bawah */
}

/* CSS untuk belah */
.belah {
    display: flex; /* Atur tata letak flex */
    justify-content: space-between; /* Atur jarak ruang antara */
    align-items: center; /* Pusatkan secara vertikal */
}

/* CSS untuk tombol tampilkan */
#tampilkan {
    background-color: #007bff; /* Warna latar belakang */
    color: #fff; /* Warna teks */
    padding: 10px 20px; /* Ukuran padding */
    border: none; /* Hilangkan border */
    border-radius: 5px; /* Sudut melengkung */
    cursor: pointer; /* Kursor pointer */
}

#tampilkan:hover {
    background-color: #0056b3; /* Warna latar belakang saat hover */
}

@media print{
    .form {
        display: none;
    }
}

    </style>
</head>
<body>
    <h1>Bensin Shell</h1>
    <main>
        <form action="" method="post">
                <div class="form">
            <div class="BB">
                <label for="">Masukkan Jumlah Liter</label>
                <input type="number" name="BB" id="jumlah">
            </div>
            <div class="brg">
                <label for="">Plih Tipe Bahan Bakar:</label>
                <select name="brg" id="jenis">
                    <option value="Shell Super">Shell Super</option>
                    <option value="Shell V-Power">Shell V-Power</option>
                    <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                    <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>    
                </select>
            </div> 
            <div class="select">
                <label for="">Masukan Uang:</label>
                <input type="number" name="bayar">
                <div class="btn">
                    <button type="submit" name="cash" id="bayar">bayar!</button>
                </div>
            </div>
            <div class="select">
                <button type="submit" name="cek"  id="cek">Cek Harga!</button>
            </div>
            <div class="btn">
                <p id="p"></p>
            </div>
                
            
        </div>
        </form>
    <?php
    require "logicc/Shell.php";
    ?>
    <div class="btn">
        <button type="submit" class="ilang" onclick="window.print()">Cetak Bon Ini</button>
    </div>
           
    </main>
    <script>
                const hargaBahanBakar = {
            "Shell Super": 15420.00,
            "Shell V-Power": 16130.00,
            "Shell V-Power Diesel": 18310.00,
            "Shell V-Power Nitro": 16510.00,
        };

        document.getElementById("cek").addEventListener("click", function(event) {
    event.preventDefault(); // Mencegah perilaku default dari form HTML (reload halaman)
    
    // Ambil nilai dari input dengan id "jenis" dan "jumlah"
    const jenis = document.getElementById("jenis").value;
    const jumlah = parseInt(document.getElementById("jumlah").value);

    // Cek apakah nilai yang dimasukkan adalah angka yang valid
    if (isNaN(jumlah)) {
        // Jika jumlah tidak valid, tampilkan pesan kesalahan
        document.getElementById("p").innerHTML = "Masukkan jumlah liter yang valid.";
    } else {
        // Jika jumlah valid, lanjutkan dengan perhitungan harga
        if (hargaBahanBakar.hasOwnProperty(jenis)) {
            const harga = hargaBahanBakar[jenis] * jumlah;
            const ppn = harga * 10/100;
            const ak = ppn;
            // Tampilkan total harga yang harus dibayar di halaman HTML
            document.getElementById("p").innerHTML = 'Harga yang harus kamu bayar adalah Rp. ' + harga + ' harga belom termasuk *ppn';
        } else {
            // Jika tipe bahan bakar tidak valid, tampilkan pesan kesalahan
            document.getElementById("p").innerHTML = "Tipe bahan bakar tidak valid.";
        }
    }
});
    function pindah(){
        document.getElementById('cetak').addEventListener("click",function(url){
        })
    }

    </script>
</body>
</html>