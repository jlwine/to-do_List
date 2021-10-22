<header class="header">
        
        <img class="logo" src="img/logo.png" alt="logo" width="50" height="50">
        <nav>
            <ul class="nav__links">
                <li><a href="#">Обо мне</a></li>
                <li><a href="#">Обратная связь</a></li>
            </ul>
        </nav>
        <a class="profile_avatar" href="profile.php?id=<?=$_SESSION['user']['id']; ?>"><img style="border-radius: 100px;" src="<?=$_SESSION['user']['avatar'] ?>" width="55" height="55" alt=""></a>
        <a class="nickname" href="profile.php?id=<?=$_SESSION['user']['id']; ?>"><?=$_SESSION['user']['login']?></a>
        <?php
        if(($_SESSION['user']['login'] == NULL) && ($_SESSION['user']['email'] == NULL)) {
            echo '<div class="btns">
                 <a class="login" href="auth.php"><button class="Auth">Login</button></a>
                 <a class="sign" href="signup.php"><button class="Register">Sign up</button></a>
                 </div>';
         } else {
             echo '<a class="header" href="vendor/logout.php"><button class="Register">Exit</button></a>';
         }
        ?>
        
        
    </header>