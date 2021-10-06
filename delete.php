<?php
    $dsn = 'mysql:host=localhost;dbname=to-do';
    $pdo = new PDO($dsn, 'mysql', '');
    $idUser = $_SESSION['user']['id'];

    $id = $_GET['id'];

    $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header("Location: ../index.php?id=" . $idUser);