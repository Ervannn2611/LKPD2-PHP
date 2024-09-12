<?php
$rupiah = 7530; // uang yang akan dihitung

$coins = [1000, 500, 200, 100]; // array koin yang tersedia
$result = []; // array untuk menyimpan hasil perhitungan

// Perulangan untuk menghitung jumlah koin yang diperlukan
foreach ($coins as $coin) {
    // menghitung jumlah koin yang diperlukan
    $result[$coin] = intdiv($rupiah, $coin); // menggunakan intdiv() untuk pembagian integer
    // menghitung sisa uang yang belum dihitung
    $rupiah = $rupiah % $coin; 
}

// Menampilkan hasil
echo "Jumlah koin yang diperlukan:<br>";
foreach ($result as $coin => $count) {
    echo "Koin Rp $coin : $count <br>";
}
?>
