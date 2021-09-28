<?php
    session_start();
    $connect = mysqli_connect('localhost', 'mysql', '', 'to-do');

    if (!$connect) {
        die('Error connect to DataBase');
    }


    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $passRepeat = $_POST['psw-repeat'];

    if ($pass === $passRepeat) {
        //connect...

        $pass = md5($pass);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `pass`) VALUES (NULL, '$email', '$pass')");
        $_SESSION['message'] = 'Вы успешно зарегистрировались';
        header('Location: ../index.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../signup.php');
        die('Пароли не совпадают');
    }