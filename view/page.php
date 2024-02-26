<?php
session_start();


if(isset($_SESSION["username"])){
    echo '<h1> Welcome ' .  $_SESSION['username'] . '</h1>';
} else{
    echo 'welcome bot';
    echo "<a href='/beginner/index12.php'>Back</a>";
};
?>