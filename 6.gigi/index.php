<?php
//mendefinisikan array
$barang = [
    [
        'nama_barang' => 'pasta gigi',
        'harga' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'sabun mandi',
        'harga' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'aloe vera sheet mask',
        'harga' => 15000,
        'jumlah_beli' => 4,
    ]
];
$total_harga = 0; //inisialisasi variabel untul menyimpan total harga

//looping array
foreach ($barang as $item) {
     // Menghitung subtotal untuk item saat ini 
    $subtotal = $item['harga'] * $item['jumlah_beli'];
    $total_harga += $subtotal;
    echo "{$item['nama_barang']} {$item['harga']} ({$item['jumlah_beli']})  = $subtotal<br>";
}
// Menampilkan total harga yang harus dibayarkan
echo "<br>Total Harga yang harus dibayarkan adalah: <b>".  number_format( $total_harga, 0, ',', '.') . "</b><br>";
?>
