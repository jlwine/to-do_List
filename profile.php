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
    <header class="header">
        <img class="logo" src="img/logo.png" alt="logo" width="50" height="50">
        <nav>
            <ul class="nav__links">
                <li><a href="#">Обо мне</a></li>
                <li><a href="#">Обратная связь</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <img style="border-radius: 50px;" src="<?=$_SESSION['user']['avatar'] ?>" width="200" height="188" alt="">
        <br>
        <h2 style="margin: 10px 0;" class="login"><b><?= $_SESSION['user']['login'] ?></b></h2></h2>
        <br>
        <a href="#" class="email">Email: <div class="emailUser"><?= $_SESSION['user']['email']?></div></a><br>
        <a href="index.php" class="my_tasks">Мои задачи</a><br>
        <a href="auth.php" class="logout">Выйти</a>
    </div>
</body>
</html>