<?php
require __DIR__."/vendor/autoload.php";


use Kreait\Firebase\Factory;
$factory = (new Factory)
    ->withServiceAccount('./phpe-258ef-firebase-adminsdk-locf9-174644d326.json')
    ->withDatabaseUri('https://phpe-258ef-default-rtdb.firebaseio.com/');

    $storage = $factory->createStorage();
    
?>

