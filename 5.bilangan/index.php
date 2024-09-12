<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


//Memeriksa hasilu dua array
$bilangan = array_merge($bil1, $bil2);//menggabungkan array
rsort($bilangan);
echo "hasil :  ";
//menggabungkan dan menampilkan elemen array
echo implode(", ", $bilangan);

?>