
<?php
$angka= 100;
$lipat1= 3;
$lipat2= 5;

for ($i=1; $i <= $angka; $i++) { 
    $hasil = "";
    if ($i % $lipat1 == 0) {
        $hasil .= "fizz";
    }
    if ($i % $lipat2 == 0) {
        $hasil .= "buzz";
    }
    if (empty($hasil)) {
        $hasil = $i;
    }
    echo $hasil . "<br>";
}


?>
