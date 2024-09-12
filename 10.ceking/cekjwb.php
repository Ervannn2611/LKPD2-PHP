<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function checkjawaban($nama, ...$arrJawaban){
    $jawaban = ['A','D','C','C','B','A','E','B','A','E'];
    $arrBenar = [];

    //Mengecek jawaban yang diberikan dengan jawaban yang benar
    foreach($jawaban as $key => $value){
        if($arrJawaban[$key] == $value){
           $arrBenar[$key] = 1; //Jawaban benar  
        } else {
            $arrBenar[$key] = 0; //Jawaban salah
        }
    }
    
    //Menampilkan data
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>". count(array_keys($arrBenar, 1)). "</b><br>";
 //count(array_keys($arrBenar, 1)) berfungsi untuk menghitung jumlah nilai yang sama dengan 1 didalam array $arrBenar
    echo "Jumlah Jawaban Salah : <b>". count(array_keys($arrBenar, 0)) . "</b><br>";
}

echo "<br>";
checkjawaban("Maman", "A", "E", "C", "C", "B", "A", "E", "B", "A", "E");
?>

</body>
</html>
