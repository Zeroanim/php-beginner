<?php

//belajar string function

$sapa = 'hello';


echo strlen($sapa);
echo '<br>';
echo strpos($sapa, 'o');
echo '<br>';
echo strrpos($sapa,'o');
echo '<br>';
echo strrev($sapa);
echo '<br>';
echo strtolower($sapa);


if(str_starts_with($sapa,'halo')){
    echo 'yes';
};

$java = "<script>alert('heloo world');</script>";

echo $java;
//echo "<script>alert('Hello, world!');</script>";

?>