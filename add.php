<?php
    session_start();
    $task = $_POST['task'];
    if($task == '') {
        echo 'Введите ваше дело';
        exit();
    }
//    $id_user = $_GET['id'];
    $idUser = $_SESSION['user']['id'];
    $connect = mysqli_connect('localhost', 'mysql', '', 'to-do');

    mysqli_query($connect, "INSERT INTO `tasks` (`id`, `id_user`, `task`) VALUES (NULL, '$idUser', '$task')");


    header("Location: ../index.php?id=" . $idUser);
?>