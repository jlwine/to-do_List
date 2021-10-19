<?php
    
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
    
    $path = 'uploads/' . time() .$_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке';
    }
    $userID = $_GET['id'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];
    
    mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `email` = '$email', `avatar` = '$path' WHERE `id` = '$userID'");
    header('Location: profileSettings.php?id='.$userID);
   