<?php
session_start();
        $dsn = 'mysql:host=localhost;dbname=to-do';
        $pdo = new PDO($dsn, 'mysql', '');
        $login = $_POST['login'];
        $email = $_POST['email'];
        $avatar = $_POST['avatar'];
        
        


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    <link rel="stylesheet" href="profileSet.css"
</head>
<body>
<?php
    require "blocks/header.php";
?>
<form action="vendor/update.php?id=<?=$idUser = $_GET['id'];?>" method="post" enctype="multipart/form-data">
    <div class="container">
        <p class="tittleSettings">Редактирование профиля</p><br>
        <div class="set01">
            <img class="setAvatar" src="<?=$_SESSION['user']['avatar'] ?>" width="95" height="86" alt="">
            <label class="settings_name"><?=$_SESSION['user']['login']?></label><br>
            <br><br><label class="setChangeAvatar">
                <input type="file" name="avatar">
                Изменить фото профиля
            </label>
        </div>
        <div class="border_between"></div>
        <div class="set02">
            <label>Имя пользователя: </label>
            <input type="text" class="textField" maxlength="25" name="login" size="25" value="<?=$_SESSION['user']['login']?>" required>
        </div>
        <div class="set03">
            <label>Эл.адрес: </label>
            <input type="text" class="textField" maxlength="25" name="email" size="25" value="<?=$_SESSION['user']['email']?>" required>
        </div>
        <div class="set04">
            <label class="reminder">Перед сохранением <br> необходимо вести пароль!</label>
        </div>
        <div class="set04">
            <label>Введите пароль: </label>
            <input type="password" name="pass" class="textField" maxlength="25" size="25">
        </div>
        <div class="border_between"></div>
        <button type="submit" class="SaveBtn" name="send">Сохранить</button>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg">'. $_SESSION['message'] . ' </p>';
            }
            unset ($_SESSION['message']);
        ?>
    </div>
</form>
</body>
</html>