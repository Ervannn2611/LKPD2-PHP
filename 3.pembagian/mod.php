<?php
    $number = 90;

    // Memulai loop dari 1 sampai dengan nilai $number 
    for ($i = 1; $i <= $number; $i++) { 
         // Memeriksa apakah $number habis dibagi $i
        if ($number % $i == 0) {
            // Jika iya, menampilkan bahwa $i adalah faktor dari $number
            echo $number . "=" . $i . "<br>";
        }
    }
?>
