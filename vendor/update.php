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
    
    // $userID = $_GET['id'];
    // $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$userID'");
    // $user = mysqli_fetch_assoc($user);
    $userID = $_GET['id'];
    if (isset($_REQUEST['send'])) {
        $user_login = $_REQUEST['login'];
        $user_email = $_REQUEST['email'];
    }
    $path = 'uploads/' . time() .$_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке';
    } else {
       
        mysqli_query($connect, "UPDATE `users` SET `login` = '$user_login', `email` = '$user_email', `avatar` = '$path' WHERE `id` = '$userID'");

        $_SESSION['user']['login'] = $_POST['login'];
        $_SESSION['user']['email'] = $_POST['email'];
        $_SESSION['user']['avatar'] = $path;
       
        

        header('Location: ../profileSettings.php?id='.$userID);
    }

    







    
    // $login = $_POST['login'];
    // $email = $_POST['email'];
    // $avatar = $_POST['avatar'];
    
    
    // mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `email` = '$email', `avatar` = '$path' WHERE `id` = '$userID'");
        
    

    

    
    
   