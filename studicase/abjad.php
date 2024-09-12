<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cek Karakter </h1>
    <form action="abjad.php" method="post">
        <label for="text">Masukkan teks: <input type="text" name="text"></label>
        <input type="submit" name="submit" value="cek">
    </form>
</body>
<?php
if(isset($_POST['submit'])) {
    if(empty($_POST['text'])) {
        echo "Teks tidak boleh kosong";
    }else{
    $text = $_POST['text'];
    $totalAbjad = strlen($text);
    echo "<br>";
    echo "<b>Total karakter: $totalAbjad";

    }
};
?>
</html>
