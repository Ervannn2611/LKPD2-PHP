<?php
// Mendefinisikan fungsi wrapText yang membatasi panjang teks
    function wrapText($text,) {
         // Mengubah teks menjadi array karakter individu
        $count = str_split($text);

          // Memeriksa apakah jumlah karakter dalam array lebih dari 50
        if (count($count) > 50) {
            $text = substr($text, 0, 50);
              // Menambahkan "..." di akhir teks untuk menunjukkan bahwa teks telah dipotong
            $text .= "...";


        }
        echo $text;
    }
    $kata = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aliquid exercitationem ipsa asperiores 
    deleniti recusandae pariatur, illo officia iste molestias provident illum magnam, at enim ratione inventore amet. 
    Vitae eaque praesentium ipsa officiis velit qui, porro reprehenderit, consectetur autem est fuga quidem, enim 
    officia nesciunt voluptate! Quia magnam reprehenderit adipisci architecto delectus accusamus unde. Eligendi officia 
    autem placeat quis provident rem totam, enim veritatis suscipit distinctio minus voluptatem a quae molestiae, 
    voluptatibus voluptas quam corrupti inventore esse. Nisi in odit alias.";

    echo "<b> kalimat awal : </b>";
     // Memanggil fungsi wrapText dengan teks panjang yang telah didefinisikan
    wrapText($kata);
?>