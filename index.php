<?php
session_start();
$id_user = $_GET['id'];
$_SESSION['id'] = $id_user;


   


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of tasks</title>
    <link rel="stylesheet" href="style.css">
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
        <a class="profile_avatar" href="profile.php"><img style="border-radius: 100px;" src="<?=$_SESSION['user']['avatar'] ?>" width="55" height="55" alt=""></a>
        <a class="nickname" href="profile.php"><?=$_SESSION['user']['login']?></a>
        <?php
        if(($_SESSION['user']['login'] == NULL) && ($_SESSION['user']['email'] == NULL)) {
            echo '<div class="btns">
                 <a class="login" href="auth.php"><button class="Auth">Login</button></a>
                 <a class="sign" href="signup.php"><button class="Register">Sign up</button></a>
                 </div>';
         } else {
             echo '<a class="header" href="auth.php"><button class="Register">Exit</button></a>';
         }
        ?>
        
        
    </header>

<div class="container">

        <h1>Список дел</h1>
        <form action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Нужно будет.." class="form-control">
            <button type="submit" name="sendTsk" id="sendTask" class="btn btn success">Добавить</button>
        </form>

        <?php
        $dsn = 'mysql:host=localhost;dbname=to-do';
        $pdo = new PDO($dsn, 'mysql', '');
        $idUser = $_GET['id'];      

        echo '<ul class="ull">';
        $query = $pdo -> query('SELECT * FROM `tasks` WHERE `id_user` ='.$idUser);
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li class="lii"><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
        }
        echo '</ul>'
        ?>

</div>


</body>
</html>