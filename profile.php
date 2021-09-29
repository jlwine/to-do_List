<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    <link rel="stylesheet" href="styleProfile.css"
</head>
<body>
    <div class="container">
        <img style="border-radius: 50px;" src="<?=$_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
        <a href="auth.php" class="logout">Выйти</a>
    </div>
</body>
</html>