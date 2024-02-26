<?php
//belajar superglobal


//var_dump($GLOBALS);
//var_dump($_GET);
//var_dump($_POST);
//var_dump($_COOKIE);
//var_dump($_FILES);
//var_dump($_REQUEST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <!-- untuk menampilkan localhost -->
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <!-- untuk menampilkan directory file -->
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <!-- untuk menampilkan root system kita -->
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <!-- untuk menampilkan server yang digunakan -->
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <!-- menampilkan port localhost yang digunkan -->
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <!-- tempat file yang lagi digunakan -->
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <!-- menampilkan halaman file yang ada di dalam url ini -->
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <!-- versi php yang digunakan -->
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <!-- browser yang digunakna secara rinci ,beserta spek laptopnya -->
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <!-- ip localhost pada umumnya -->
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <!-- ip port pada umumnya -->
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>