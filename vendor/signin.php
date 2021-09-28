<?php
    session_start();
    $connect = mysqli_connect('localhost', 'mysql', '', 'to-do');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $login =$_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $passRepeat = $_POST['psw-repeat'];

    if ($pass === $passRepeat) {
        //connect...
        $path = 'uploads/' . time() .$_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке';
            header('Location: ../signup.php');
        }
        $pass = md5($pass);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `login`, `pass`, `avatar`) VALUES (NULL, '$email', '$login', '$pass', '$path')");
        $_SESSION['message'] = 'Вы успешно зарегистрировались';
        header('Location: ../auth.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../signup.php');
        die('Пароли не совпадают');
    }



