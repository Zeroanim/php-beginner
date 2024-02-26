<?php
//belajar function

function register(){
    echo 'Hello World';
};

register();

echo '<br>';

function user($gmail) {
    echo $gmail. ' akun saya';;
}

user('user@gmail.com');

echo '<br>';


function sum($n1, $n2) {
    return $n1 . ' ' . $n2;
};

//echo sum('hello' , ' world');

$hello = sum('hello', 'world');
echo $hello;

echo '<br>';
 $ml = fn($ma, $lm) => $ma . $lm;

 echo $ml('halo', ' semua');
?>