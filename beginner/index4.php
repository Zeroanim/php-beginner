<?php

$age = 10;

//if ($age >= 12){
//    echo 'salah bor';
//} else {
//    echo 'hahahahah';
//}

$t = date("H");
//echo $t;

//if ($t < 12) {
//    echo 'Good Morning';
//} else if ($t < 15) {
//    echo 'good evening';
//}else {
//    echo 'good night';
//}


$post = ['hello world'];

//if(!empty($post)) {
//    echo $post[0] . ' ``` ada isinya``` ';
//}else {
//    echo 'ilang  bjur';
//}

//ini gunanya adalah untuk menampilkan apakah di data post ada isi atau tidak jika tisak maka
//muncul no post dan jika ada maka muncul isi data dari post
//echo !empty($post) ? $post[0] : 'NO post';

//$hrlo = !empty($post) ? $post[0] : null;
//$hrlo = $post[0] ?? null;
//echo $hrlo;

$favcolor = 'red';


switch ($favcolor) {
    case 'red':
        echo 'Hello bro';
        break;
    case 'lue':
        echo 'is lue';
        break;
    default:
        echo 'no bro';
        break;
}

//Perbedaan utama antara switch dan if else adalah switch digunakan untuk memeriksa kondisi yang sama dengan sejumlah kemungkinan nilai,
//sedangkan if else digunakan untuk memeriksa kondisi yang berbeda.


//contohnya

// Contoh switch
//$favcolor = 'red';
//
//switch($favcolor) {
//  case 'red':
//    echo 'Hello bro';
//    break;
//  case 'blue':
//    echo 'is lue';
//    break;
//  default:
//    echo 'no bro';
//}
//
// Contoh if else
//$age = 18;
//
//if ($age >= 18) {
//  echo 'Kamu sudah dewasa';
//} else {
//  echo 'Kamu masih anak-anak';
//}


?>