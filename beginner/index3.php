<?php
//belajar array

$number = [1,2,3,4,5,6];
$fruit = array('apple', 'manggo', 'alpukat');

//oupot akan berbentuk array
//print_r($number);
//var_dump($number)

//mengambil array sesuai barisan
//echo $fruit[0];

//ini adalah sama sama array tetapi berbentuk sesuai pemangilan
$colors = [
 1=> 'blue',    
 4=> 'red',    
 7=> 'purpple'    
];

//mengambil array sesuai nomornya
//echo $colors[7];

$hex = [
    'blue' => '#0221',
    'red' => '#3102',
    'yellow' => '#28102'
];

//echo $hex['blue'];


$akun = [
    'nama' => 'user',
    'password' => '12812',
    'gmail' => 'user@gmail.com'
];

//echo $akun['nama'] . ' ' . $akun['password']

$people = [

    [
        'user' => 'naruto',
        'password' => '2183'
    ], 
    [
        'user' => 'itachi',
        'password' => '3793'
    ],
    [
        'user' => 'yato',
        'password' => '213876'
    ]
    
];

//echo $people[2]['password'];
//var_dump(json_encode($people)); 
//echo json_encode($people);


?>