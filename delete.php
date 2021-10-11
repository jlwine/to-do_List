<?php
    session_start();

    $dsn = 'mysql:host=localhost;dbname=to-do';
    $pdo = new PDO($dsn, 'mysql', '');
    $id_user = $_SESSION['id'];
    

    $id = $_GET['id'];

    $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header("Location: ../index.php?id=".$id_user);