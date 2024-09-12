<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Hari</title>
</head>
<body>
    <form action="discount.php" method="post">
        <input type="text" name="pembayaran" id="pembayaran" placeholder="Bayar">
        <input type="submit" value="Submit">
    </form>

    <?php
    
    if (isset($_POST['pembayaran'])) {
        $pembayaran = $_POST['pembayaran'];
        $diskon = 5 / 100;
        $diskonHari = 7 / 100;
        $day = date("l");

        // Memeriksa apakah pembayaran lebih dari 100.000 dan hari ini adalah ""
        if ($pembayaran > 100000 && $day == "friday") {
            $totalHarga = $pembayaran - ($pembayaran * $diskonHari);
            echo "Total Harga dengan diskon hari Kamis: $totalHarga";

            // Memeriksa pembayaran apakah lebih dari 1.000.000
        } elseif ($pembayaran > 1000000) {
            $totalHarga = $pembayaran - ($pembayaran * $diskon);
            echo "Total Harga dengan diskon biasa: $totalHarga";
        } else {
            $totalHarga = $pembayaran;
            echo "Total Harga tanpa diskon: $totalHarga";
        }
        
        //Menampilkan Hasil
        echo "<br>";
        echo "Hari ini: " . $day;
        echo "<br>";
        echo "Pembayaran: " . $pembayaran;
    }
    ?>
</body>
</html>
