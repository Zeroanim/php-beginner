<?php
//Data and type

$name = "Anime";
$age = "26";
$float = 23.40;
$string = "23.40";
$true = true;
$false = false;



//var_dump($true);
//var_dump($false);
//var_dump($float);
//var_dump($string);

//echo $name . ' ' . $age;
//echo $name . ' my age ' . $age;

//jika variable nya ingin dimasukan dalam string
//echo " ${name} my age ${age} ";

$y = true;
$x = '5' + '6';
//echo $x;

//menampilkan type data dan variaablenya
//var_dump($x);

//echo 7 - 3;
//echo 8 * 8;
//echo 8 / 2;
//echo 10 % 3;

//Dibawah ini untuk menampilkan konstanta

//Yang Kapital itu adalah variable konstanta, dan yang setelah koma adalah isi dari konstanta
//dan ini juga lebih mudah digunakan untuk hal yang besar
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo DB_NAME;
?>