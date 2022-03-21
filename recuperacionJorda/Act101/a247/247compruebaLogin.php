<?php
    $user = $_GET["user"];
    $password = $_GET["password"];

    $data = [
        "userData" => $user,
        "passwordData" => $password
    ];

    $admin = [
        "userData" => "pepe",
        "passwordData" => "qwerty"
    ];

    if ($admin['userData'] == $user and $admin['passwordData'] == $password) {
        header('Location: 247ok.php');
    } else {
        header('Location: 247ko.php');
    }


