<?php
    require_once 'connect.php';

    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $passRepeat = $_POST['psw-repeat'];

    if ($pass === $passRepeat) {
        //connect...
    }
    else {
        die('Пароли не совпадают');
    }