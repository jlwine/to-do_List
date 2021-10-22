<?php
    session_start();
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect = mysqli_connect('localhost', 'mysql', '', 'to-do');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    if (!$connect) {
        die('Error connect to DataBase');
    }
    
    $pass = md5($_POST['pass']);
    $userID = $_GET['id'];
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        if (isset($_REQUEST['send'])) {
            $user_login = $_REQUEST['login'];
            $user_email = $_REQUEST['email'];
        }
        $path = 'uploads/' . time() .$_FILES['avatar']['name'];
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)) {
            $_SESSION['user']['avatar'] = $path;
        }
        mysqli_query($connect, "UPDATE `users` SET `login` = '$user_login', `email` = '$user_email', `avatar` = '$path' WHERE `id` = '$userID'");
    
            $_SESSION['user']['login'] = $_POST['login'];
            $_SESSION['user']['email'] = $_POST['email'];
            header('Location: ../profileSettings.php?id='.$userID);
            $_SESSION['message'] = 'Изменения сохранены';
    } else {
        $_SESSION['message'] = 'Не верный пароль';
        header('Location: ../profileSettings.php?id='.$userID);
    }





    // $userID = $_GET['id'];
    // if (isset($_REQUEST['send'])) {
    //     $user_login = $_REQUEST['login'];
    //     $user_email = $_REQUEST['email'];
    // }
    // $path = 'uploads/' . time() .$_FILES['avatar']['name'];
    // if (move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)) {
    //     $_SESSION['user']['avatar'] = $path;
    // }
    // mysqli_query($connect, "UPDATE `users` SET `login` = '$user_login', `email` = '$user_email', `avatar` = '$path' WHERE `id` = '$userID'");

    //     $_SESSION['user']['login'] = $_POST['login'];
    //     $_SESSION['user']['email'] = $_POST['email'];
    //     header('Location: ../profileSettings.php?id='.$userID);

        
    

    

    
    
   