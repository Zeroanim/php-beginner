<?php
session_start();

include("./dbcon.php");

if (isset($_POST['save'])) {
    $fm = $_POST['fm'];
    $lm = $_POST['lm'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $postData = [
        'fnm' => $fm,
        'lnm' => $lm,
        'email' => $email,
        'number' => $number,
    ];

    $ref_table = "main";
    $postRef_result = $database->getReference($ref_table)->push($postData);
    $postKey = $postRef_result->getKey();   

    if ($postKey) {
        $_SESSION['status'] = "success";
        header("Location: /");
    } else {
        $_SESSION['status'] = "failed add contact";
        header("Location: /");
    }
}
?>