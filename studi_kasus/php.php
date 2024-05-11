<?php

// $nilai = 99;
// $hasil = $nilai >= 75 ? "kompeten" : "tidak kompeten";
// $color = $nilai >= 75 ? "green" :"red";
// echo"nilai : {$nilai} <h1  style = 'color:{$color}'>{$hasil}</ h1>";
// echo"<br>";
// echo"<br>";
// echo"<br>";
// echo"<br>";
// echo"<br>";
// echo"<br>";

for($i = 1 ; $i <= 10; $i++){
 echo  "1 x " .$i. " = " .$i * 1;
 echo"<br>";
}
echo"<br>";echo"<br>";
for($i = 1 ; $i <= 10; $i++){
 echo  "2 x " .$i. " = " .$i * 2;
 echo"<br>";
}
echo"<br>";echo"<br>";
for($i = 1 ; $i <= 10; $i++){
 echo  "3 x " .$i. " = " .$i * 3;
 echo"<br>";
}

$ar=["kafka","ganteng","banget"];
$ar[3] = "nabilaa";
var_dump($ar);
echo"<br>";
echo"<br>";
$ta= [
    [
        "nama" => "kafka",
        "rombel" => "PPLG",
        "rayon" => "cic7"
    ],
    [
        "nama" => "cipung",
        "rombel" => "PPLG",
        "rayon" => "cic4"
    ],
    [
        "nama" => "pacril",
        "rombel" => "PPLG",
        "rayon" => "cic4"
    ],
    [
        "nama" => "zaen",
        "rombel" => "PPLG",
        "rayon" => "cic7"
    ],
 ];
 foreach( $ta as $ka){
    echo  $ka["nama"];
    echo $ka ["rombel"];
    echo $ka ["rayon"];
    echo"<br>";
 }

 $data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' =>2006,
    ]
];

foreach($data as $d){
    if($d['tahun'] % 4 == 0){
        echo $d['nama']."dia lahir di kabisat".$d['tahun'];
        echo"<br>";
    }elseif($d['tahun'] % 100 == 0){
        echo $d['nama']."dia bukan lahir di kabisat".$d['tahun'];
        echo"<br>";
    }else{
        echo $d['nama']."dia  bukan lahir di kabisat".$d['tahun'];
        echo"<br>";
    }
}

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];
foreach($barang as $br){
    $kons = $br['harga_barang'] * $br['jumlah_beli'];
    $total =+ $kons;
    $roro += $total;
}
echo"yang harus di bayar adalah Rp" . number_format($roro, 0, ',','.');

echo"<br>";

$makanan = ["aku","dia","kamu"];
$makanan[3] = "anunya";
$Q = [
    [
        "nama" => "kafka",
        "status" => "ganteng"
    ]
    ];
echo  $Q[0]["nama"];
echo  $Q[0]["status"];
?> 