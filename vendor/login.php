<?php
    session_start();
    $connect = mysqli_connect('localhost', 'mysql', '', 'to-do');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $login = $_POST['login'];
    $pass = md5($_POST['psw']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
        ];
        header('Location: ../profile.php');


    } else {
        $_SESSION['message'] = 'Не верная почта или пароль';
        header('Location: ../auth.php');
    }