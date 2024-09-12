<?php


$text = "selamat datang di PPLG";
$textCari = "a";
preg_match_all('/'.$textCari.'/', $text, $matches);
echo "huruf " . $textCari . " ada ";
echo count($matches[0]);


?>