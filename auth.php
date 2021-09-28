<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of tasks</title>
    <link rel="stylesheet" href="styleSign.css">
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
    <div class="btns">
        <a class="login" href="#"><button class="Auth">Login</button></a>
        <a class="sign" href="signup.php"><button class="Register">Sign up</button></a>
    </div>
</header>

    <form action="vendor/login.php" method="post">
        <div class="container">
            <h1>Авторизация</h1>
            <p>Заполните все поля для авторизации.</p>
            <hr>

            <label for="login"><b>Логин</b></label>
            <input type="text" placeholder="Введите ваш логин" name="login" required>

            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Введите ваш пароль" name="psw" required>

            <hr>
            <button type="submit" class="registerbtn">Войти</button>
        </div>

        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> '. $_SESSION['message'] . ' </p>';
        }
        unset ($_SESSION['message']);
        ?>
    </form>

</body>
</html>