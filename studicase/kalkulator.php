<?php
$hasil = "";
$eror = "";

if(isset($_POST['submit'])) {
    $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : 0;
    $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : 0;
    $operasi = isset($_POST['operasi']) ? $_POST['operasi'] : 0;

    if(is_numeric($angka1) && is_numeric($angka2)) {
        switch($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $eror = "angka yang anda masukkan bukan angka";
                }
                break;
            }
        } else {
            $eror = "angka yang anda masukkan bukan angka";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
   * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

form {
    width: 100%;
    max-width: 500px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    margin-top: 10px;
}

button[type="submit"] {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    background-color: #00a8f7;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

h1 {
    margin-top: 20px;
    font-size: 24px;
    color: #333;
}

h2 {
    font-size: 20px;
    color: #333;
    margin-top: 10px;
}

.eror {
    color: red;
}

.hasil {
    color: #333;
}

</style>
<body>


    <form action="" method="post">
        <label for="angka1">Angka 1</label>
        <input type="text" name="angka1" id="angka1">
        <label for="angka2" >Angka 2</label>
        <input type="text" name="angka2" id="angka2">
        <select name="operasi" id="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">X</option>
            <option value="bagi">/</option>
        </select>
        <button type="submit" name="submit">Hitung</button>
        <h1>Hasil</h1>
        <h2><?= $eror ?></h2>
        <h2><?= $hasil ?></h2>
        
    </form>
</body>
</html>
