<?php
    $task = $_POST['task'];
    if($task == '') {
        echo 'Введите ваше дело';
        exit();
    }

    $dsn = 'mysql:host=localhost;dbname=to-do';
    $pdo = new PDO($dsn, 'mysql', '');

    $sql ='INSERT INTO tasks(task) VALUES(:task)';
    $query = $pdo -> prepare($sql);
    $query->execute(['task' => $task]);

    header('Location: /');
?>