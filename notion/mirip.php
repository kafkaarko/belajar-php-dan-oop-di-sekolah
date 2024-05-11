<?php 

//studi kasus
//seorang dosen akan memberikan penilaian dengan kriteria
// nilai >= 80 : nilai mutu A
// nilai >= 68 : nilai mutu B
// nilai >= 56 : nilai mutu C
// nilai >= 45 : nilai mutu D
// seliannya E 

// kalau nilainya A,B,C maka lulus,selainnya tidak lulus

//buat dlu var nilai
$nilai = 90;

//versi 1
//kalau nilainya >= 80 maka A dan lulus
if($nilai >= 80){
    echo"Nilai anda A ".$nilai." anda di nyatakan lulus";
}
//kalau nilainya >= 68 maka B dan lulus
elseif($nilai >= 68){
    echo"Nilai anda B ".$nilai." anda di nyatakan lulus";
}
//kalau nilainya >= 56 maka C dan lulus
elseif($nilai >= 56){
    echo"Nilai anda C ".$nilai." anda di nyatakan lulus";
}
//kalau nilainya >= 45 maka D dan tidak lulus
elseif($nilai >= 45){
    echo"Nilai anda D ".$nilai." anda di nyatakan  tidak lulus";
}else{
    echo"Nilai anda E ".$nilai." anda di nyatakan  tidak lulus";
}

echo"<br>";
//veersi 2

$nilai2 = 20;
if($nilai2>=80){
    $nilaimutu= "A";
    $ket = "lulus";
}elseif($nilai2>=68){
    $nilaimutu= "B";
    $ket = "lulus";
}elseif($nilai2>=56){
    $nilaimutu= "C";
    $ket = "lulus";
}elseif($nilai2>=45){
    $nilaimutu= "D";
    $ket = " tidak lulus";
}else{
    $nilaimutu= "D";
    $ket = " tidak lulus";
}

echo"Nilai anda $nilaimutu ".$nilai2." anda di nyatakan  $ket";

echo"<br>";
//veersi 3

$nilai3 = 34;
if($nilai3>=80){
    $nilaimutu1= "A";
}elseif($nilai3>=68){
    $nilaimutu1= "B";
}elseif($nilai3>=56){
    $nilaimutu1= "C";
}elseif($nilai3>=45){
    $nilaimutu1= "D";
}else{
    $nilaimutu1= "D";
}

// if($nilaimutu1 == "A"){
//     $ket1 = "lulus";
// }elseif($nilaimutu1 == "B"){
//     $ket1 = "lulus";
// }elseif($nilaimutu1 == "C"){
//     $ket1 = "lulus";
// }elseif($nilaimutu1 == "D"){
//     $ket1 = " Tidak lulus";
// }else{
//     $ket1 = " tidak lulus";
// }

if($nilaimutu1 == "A" || $nilaimutu1 == "B" || $nilaimutu1 == "C"){
    $ket1 = "lulus";
}else{
    $ket1 ="tl";
}

echo"Nilai anda $nilaimutu1 ".$nilai3." anda di nyatakan  $ket1";

$warna = "putih";
switch($warna){
    case "putih":
        echo"aku suka putih";
        break;
    case "merah":
        echo"aku syka merah";
        break;
        default:
        echo"udh ah";
        break;
}
?>