<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of tasks</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h1>Список дел</h1>
        <form action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Нужно будет.." class="form-control">
            <button type="submit" name="sendTsk" id="sendTask" class="btn btn success">Отправить</button>
        </form>

        <?php
        $dsn = 'mysql:host=localhost;dbname=to-do';
        $pdo = new PDO($dsn, 'mysql', '');

        echo '<ul class="ull">';
        $query = $pdo -> query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li class="lii"><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
        }
        echo '</ul>'
        ?>

    </div>

</body>
</html>