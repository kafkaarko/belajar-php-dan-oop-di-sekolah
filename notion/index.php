<?php
#$s = "kafka";

$nama = "kafka";
$umur = 15;
$jurusan = "PPLG";
$sekolah = "wikrama";
$code = "coding php";

echo "nama saya adalah $nama,<br> umur saya $umur, <br> jurusan saya $jurusan,<br> sekolah saya di smk $sekolah,<br> saya juga lagi belajar $code";
echo "<br>";
echo "<br>";
echo "<br>";
$angka = "4";
if( 4 !== $angka){
    echo "true";
}else{
    echo "false";
}

echo "<br>";

$a = 'a';
echo $a."<br>";
$nama = "kafka";
echo $nama;


$a = "1"; /* $a adalah string */
	$a++ ; /* sekarang $a adalah integer (2) */
	$a .= "19"; /* sekarang $a kembali menjadi string ("23") */
	$a += 5; /* sekarang $a berubah menjadi float (11.5) */

    echo $a."<br>";

    $kafka ="SMK Wikarama<br>";
    echo  "$kafka";

$nilai = 50 ;

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

echo"<br>";

$warna = "hijau";
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
