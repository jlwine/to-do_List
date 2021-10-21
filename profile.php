<?php
session_start();

$idUser = $_GET['id'];      

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
        <img style="border-radius: 50px;" src="<?=$_SESSION['user']['avatar']?>" width="200" height="188" alt="">
        <br>
        <h2 style="margin: 10px 0;" class="login"><b><?= $_SESSION['user']['login']?></b></h2></h2>
        <br>
        <div class="options">
            <div class="email">
                <a href="#" class="email_color">Email: <?= $_SESSION['user']['email']?></a><br>
            </div>
            <div class="tasks">
                <a href="index.php?id=<?=$_SESSION['user']['id']; ?>" class="my_tasks">Мои задачи</a><br>
            </div>
            <div class="profile_options">
                <a href="profileSettings.php?id=<?=$_SESSION['user']['id']; ?>" class="profile_style">Настройки профиля</a><br>
            </div>
            <div class="exitBtn">
                <a href="vendor/logout.php" class="logout">Выйти</a>
            </div>
        </div>
    </div>
</body>
</html>