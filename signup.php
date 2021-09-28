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
            <li><a href="#">Services</a></li>
            <li><a href="#">project</a></li>
            <li><a href="#">about</a></li>
        </ul>
    </nav>
    <div class="btns">
        <a class="login" href="#"><button class="Auth">Login</button></a>
        <a class="sign" href="signup.php"><button class="Register">Sign up</button></a>
    </div>
</header>

<form action="vendor/signin.php" method="post">
    <div class="container">
        <h1>Регистрация</h1>
        <p>Пожалуйста заполните все поля для регистрации.</p>
        <hr>

        <label for="email"><b>Электронная почта</b></label>
        <input type="text" placeholder="Введите ваш email" name="email" required>

        <label for="psw"><b>Пароль</b></label>
        <input type="password" placeholder="Введите ваш пароль" name="psw" required>

        <label for="psw-repeat"><b>Повторите ваш пароль</b></label>
        <input type="password" placeholder="Повторите ваш пароль" name="psw-repeat" required>
        <hr>

        <p>Создавая учётную запись, вы соглашаетесь с нашими <a href="#">Условиями и Политикой конфиденциальности</a>.</p>
        <button type="submit" class="registerbtn">Регистрация</button>
    </div>

    <div class="container signin">
        <p>Уже зарегистрированы? <a href="auth.php">Войти</a>.</p>
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
