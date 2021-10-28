<?php
    session_start();
    $connect = mysqli_connect('localhost', 'mysql', '', 'to-do');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $pass_len = strlen($pass);
    $passRepeat = $_POST['psw-repeat'];


    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_user) > 0) {
        $_SESSION['message'] = 'Такой логин уже занят';
        header('Location: ../signup.php');
        die('Такой логин уже занят');
    }
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    if (mysqli_num_rows($check_user) > 0) {
        $_SESSION['message'] = 'Такой email уже используется';
        header('Location: ../signup.php');
        die('Такой логин уже занят');
    }


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //ok...
    } else {
        $_SESSION['message'] = 'Адрес указан не правильно';
        header('Location: ../signup.php');
        die('Адрес указан не правильно');
    }
    
    if ($pass_len <= 6) {
        $_SESSION['message'] = 'Пароль должен быть больше 6 символов';
        header('Location: ../signup.php');
        die('Пароль должен быть больше 6 символов');
    }
    
    if ($pass === $passRepeat) {
        //connect...
        $path = 'uploads/' . time() .$_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке';
            header('Location: ../signup.php');
        } else {
            $password = md5($pass);
            mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `login`, `pass`, `avatar`) VALUES (NULL, '$email', '$login', '$password', '$path')");
            $_SESSION['message'] = 'Вы успешно зарегистрировались';
            header('Location: ../index.php');
        }
        
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../signup.php');
        die('Пароли не совпадают');
    }
    
    


    



