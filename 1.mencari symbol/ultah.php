<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cek Karakter Non-Alfanumerik</h1>
    <form action="ultah.php" method="post">
        <label for="text">Masukkan teks: 
            <input type="text" name="text" id="text" required>
        </label>
        <button type="submit" name="submit">Cek</button>
    </form>


<?php
//memeriksa karakter symbol
if (isset($_POST['submit'])) {
    $teks = isset($_POST['text']) ? $_POST['text'] : '';  
    //mencari symbol pada text (regex)
    preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

    if (count($matches[0]) > 0) { 
        //mencari symbol unik sehingga hanya simbol-simbol unik yang disimpan di dalam array $uniquesymbols.
        $uniquesymbols = array_unique($matches[0]);
        //menggabungkan(implode) semua symbol yang unik
        echo "Karakter symbol: " . implode(', ', $uniquesymbols);
    } else {
        echo "Tidak ada symbol";
    }
} else {
    echo "tidak ada symbol pada kalimat.";
}
?>
<!-- $matches[0] untuk mencocokan semua karakter -->
</body>
</html>
