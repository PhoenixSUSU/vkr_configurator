<?php
session_start();

require_once "config/database.php";

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Описание</title>
    <link rel="stylesheet" href="style_parea.css">
</head>
<body>
<?php
/*echo '<pre>';
var_dump ($_COOKIE);
var_dump ($_SESSION);
echo '</pre>';*/
?>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <h1 class="header__logo__h1">PHOENIX.PC</h1>
            </div>
            <nav class="nav">
                <a class="nav__link" href="/index.php">На главную</a>
                <a class="nav__link" href="/configurator.php">Конфигуратор</a>
            </nav>
        </div>
    </div>
</header>

<main class="main">
    <div class="container">
        <div class="main__inner">
            <div class="main__item">
                <div class="main__title">ИСТОРИЯ СБОРОК</div>
                <?php
                    if ($_SESSION['authandreg'] === 2) {
                        echo '<table class="main__table"><tr><th>ID</th><th>Название</th><th>   </th><th>   </th></tr>';
                        $sqllink = $_SESSION["user"]["id"];
                        $sql = "SELECT * FROM history WHERE `id_user` = '$sqllink'";
                        $result = mysqli_query($link, $sql);
                        $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
                        foreach ($position as $history){
                            echo '<tr><td>' . $history["id"] . '</td><td>' . $history["name"] .'</td><td><a href="config/viewsetup.php?id='. $history["id"] . '&namesetup='. $history["name"] . '&id_cpu='. $history["id_cpu"] . '&id_cooler='. $history["id_cooler"] . '&id_ram='. $history["id_ram"] . '&id_mb='. $history["id_mb"] . '&id_hdd='. $history["id_hdd"] . '&id_gpu='. $history["id_gpu"] . '&id_pu='. $history["id_pu"] . '&id_case='. $history["id_case"] . '">Просмотр</a></td><td><a class="parea__delete" href="config/del_setup.php?id_del_setup='. $history["id"] . '">Удалить</a></td></tr>';
                        }
                        echo '</table>';
                    } else {
                        echo '<p class="main__message">Для просмотра истории требуется авторизация</p>';
                    }
                ?>



            </div>
            <div class="main__item main__item__auth">
                <?php
                    if ($_SESSION['authandreg'] === 1) {
                        echo '
                            <div class="main__title">РЕГИСТРАЦИЯ</div>
                            <form class="main__form" action="config/register.php" method="post">
                                <label>Логин: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Введите логин" name="login"></label>
                                <label>Пароль: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Введите пароль" name="password"></label>
                                <label>Подтвердите пароль: <input type="password" placeholder="Введите пароль"name="password_confirm"></label>
                                <p><input class="form__btn" type="submit" value="Зарегистрироваться"></p>
                                <a class="hint" href="config/authandreg.php" >Есть аккаунт? - АВТОРИЗОВАТЬСЯ</a>
                                </form>';
                        if ($_SESSION["message"]) {
                            echo '<p class="main__info">'.$_SESSION["message"].'</p>';
                            unset($_SESSION["message"]);
                        }
                                    

                    } elseif ($_SESSION['authandreg'] === Null) {
                        echo '
                            <div class="main__title main__title_auth">АВТОРИЗАЦИЯ</div>
                            <form class="main__form" action="config/auth.php" method="post">
                                <label>Логин: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Введите логин" name="login"></label>
                                <label>Пароль: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Введите пароль" name="password"></label>
                                <p><input type="submit" value="Авторизоваться"></p>
                                <a class="hint" href="config/authandreg.php" >Нет аккаунта? - ЗАРЕГЕСТРИРОВАТЬСЯ</a>
                            </form>
                        ';
                        if ($_SESSION["message"]) {
                            echo '<p class="main__info">'.$_SESSION["message"].'</p>';
                            unset($_SESSION["message"]);
                        }
                    } else {
                        echo '
                            <div class="main__title main__title_auth">ВЫ АВТОРИЗОВАНЫ</div>
                            <p class="login__name">';
                        echo $_SESSION["user"]["login"].'</p>
                            ';
                        echo '<a class="main__btn auth" href="config/logout.php">ВЫХОД</a>';
                    }
                ?>
            </div>
        </div>
    </div>
</main>

</body>
</html>