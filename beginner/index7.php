<?php
//array function

$fruit = ['manggo', 'apple', 'banana'];

echo 'ada ' . count($fruit) . ' buah';


echo '<br>';

$nom = range(1, 100);

//print_r($nom);

//$mars = array_map(function($nom) {
  //  return "Number ${nom}";
//}, $nom);


//print_r($mars);

///$neptunus = array_filter($nom, fn($nom) =>
///$nom <= 20);
///
///echo $neptunus;
///
///print_r($neptunus);



$bom = array_reduce($nom, fn($lerry, $nom) =>
$lerry + $nom);

var_dump($bom);
var_export($bom);
?>