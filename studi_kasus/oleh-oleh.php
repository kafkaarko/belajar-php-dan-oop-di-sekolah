<?php

    $nilai = [80,78,72,84,92,88];
    echo"nilai awal ku adalah seperti ini";
    foreach($nilai as $nl){
        echo "$nl , ";
    }
    echo"<br>";
    sort($nilai);
    echo"jika nilai saya di terkeicl akan menjadi seperti ini :";
    $sortir = count($nilai);
    for($x = 0; $x < $sortir; $x++){
        echo "$nilai[$x] , " ;
    }
    echo"<br>";
    rsort($nilai);
    echo"jika nilai saya di terbesar akan menjadi seperti ini :";
    for($x = 0; $x < $sortir; $x++){
        echo "$nilai[$x] , " ;
    }
    echo"<br>";
    echo"dan ini adalah nilai terbasar ku :";
    echo (max($nilai));
    echo"<br>";
    echo"dan ini adalah nilai terkecil ku :";
    echo (min($nilai)); 
    echo"<br>";
    echo"dan ini jika nilai ku rata rata:";
    $var = array_sum($nilai) / count($nilai);
    echo round($var);
    echo"<br>";
    echo"setalah saya remed nilai saya yang semula" . (min($nilai)). " setelah remed menjadi: " . $nilai[5] = 75;
    echo "jadi nilai saya yang baru adalah: ";
    $nilai = [80,78,72,84,92,88];
    $nilai[2] = 75;
    foreach($nilai as $nu){
        echo "$nu , ";
    }
    echo "<br>";
    echo"<br>";
    echo"  jadi nilai saya terbasar adalah : ";
    rsort($nilai);
    foreach ($nilai as $no) {
        echo "$no , ";
    }
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
    $nilai = [80, 78, 72, 84, 92, 88];
    $nilaiawal = $nilai; 
    
    $nilaitertinggi = max($nilai);
    $nilaiterendah = min($nilai);
    
    sort($nilai);
    rsort($nilai);
    $ratarata = round(array_sum($nilai) / count($nilai));
    
    $index = array_search(72, $nilaiawal);
    if ($index !== false) {
        $nilaiperbaikan = $nilaiawal; 
        $nilaiperbaikan[$index] = 75;
    }
    
    $remed = $nilaiperbaikan;
    
    rsort($nilaiperbaikan);
    
    echo "Nilai saya: " . implode(", ", $nilaiawal);
    echo "<br>";
    echo "Nilai tertinggi : $nilaitertinggi";
    echo "<br>";
    echo "Nilai terkecil : $nilaiterendah";
    echo "<br>";
    echo "Urutan dari terkecil : " . implode(", ", array_reverse($nilai));
    echo "<br>";
    echo "Urutan dari terbesar : " . implode(", ", $nilai);
    echo "<br>";
    echo "Rata-rata: $ratarata";
    echo "<br>";
    echo "Nilai setelah perbaikan: " . implode(", ", $remed);
    echo "<br>";
    echo "Urutan nilai saya dari yang terbesar setelah perbaikan : " . implode(", ", $nilaiperbaikan);
    


    echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

    $nilai = [80, 78, 72, 84, 92, 88];

    // Menampilkan nilai awal
    echo "Nilai awal ku adalah: ";
    foreach ($nilai as $nl) {
        echo "$nl , ";
    }
    echo "<br>";
    
    // Mengurutkan nilai dari yang terkecil
    sort($nilai);
    echo "Jika nilai saya diurutkan dari yang terkecil akan menjadi: ";
    foreach ($nilai as $nl) {
        echo "$nl , ";
    }
    echo "<br>";
    
    // Mengurutkan nilai dari yang terbesar
    rsort($nilai);
    echo "Jika nilai saya diurutkan dari yang terbesar akan menjadi: ";
    foreach ($nilai as $nl) {
        echo "$nl , ";
    }
    echo "<br>";
    
    // Menampilkan nilai terbesar
    echo "Dan ini adalah nilai terbesar ku: " . max($nilai) . "<br>";
    
    // Menampilkan nilai terkecil
    echo "Dan ini adalah nilai terkecil ku: " . min($nilai) . "<br>";
    
    // Menampilkan rata-rata nilai
    $rata_rata = array_sum($nilai) / count($nilai);
    echo "Dan ini jika nilai ku dirata-rata: " . round($rata_rata) . "<br>";
    
    // Mengganti nilai yang diremediasi
    $nilai[5] = 75;
    echo "Setelah saya remediasi, nilai saya yang baru adalah: ";
    foreach ($nilai as $nl) {
        echo "$nl , ";
    }
    echo "<br>";
    
    // Menampilkan nilai terurut setelah remediasi
    sort($nilai);
    echo "Jadi nilai saya terurut setelah remediasi: ";
    foreach ($nilai as $nl) {
        echo "$nl , ";
    }
    echo "<br>";
?>