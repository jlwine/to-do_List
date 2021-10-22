<?php
    session_start();
    $task = $_POST['task'];
    if($task == '') {
        echo 'Введите ваше дело';
        exit();
    }
//    $id_user = $_GET['id'];
    $id_user = $_SESSION['id'];
    

    $connect = mysqli_connect('localhost', 'mysql', '', 'to-do');

    mysqli_query($connect, "INSERT INTO `tasks` (`id`, `id_user`, `task`) VALUES (NULL, '$id_user', '$task')");


    header("Location: ../main.php?id=" . $id_user);
?>