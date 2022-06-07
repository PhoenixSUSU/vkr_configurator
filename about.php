

<?php


if ($_GET['about_id_processor'] != 0) {
    setcookie ("about_name", $_GET["about_name_processor"]);
    setcookie ("about", $_GET["about_processor"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}

if ($_GET['about_id_cooler'] != 0) {
    setcookie ("about_name", $_GET["about_name_cooler"]);
    setcookie ("about", $_GET["about_cooler"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}

if ($_GET['about_id_ram'] != 0) {
    setcookie ("about_name", $_GET["about_name_ram"]);
    setcookie ("about", $_GET["about_ram"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}

if ($_GET['about_id_mb'] != 0) {
    setcookie ("about_name", $_GET["about_name_mb"]);
    setcookie ("about", $_GET["about_mb"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}

if ($_GET['about_id_hdd'] != 0) {
    setcookie ("about_name", $_GET["about_name_hdd"]);
    setcookie ("about", $_GET["about_hdd"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}

if ($_GET['about_id_gpu'] != 0) {
    setcookie ("about_name", $_GET["about_name_gpu"]);
    setcookie ("about", $_GET["about_gpu"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}

if ($_GET['about_id_pu'] != 0) {
    setcookie ("about_name", $_GET["about_name_pu"]);
    setcookie ("about", $_GET["about_pu"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}

if ($_GET['about_id_case'] != 0) {
    setcookie ("about_name", $_GET["about_name_case"]);
    setcookie ("about", $_GET["about_case"]);
    setcookie ("link", $_GET["link"]);
    header("Location: /about.php");
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Описание</title>
    <link rel="stylesheet" href="style_about.css">
</head>
<body>
<?php
/*echo '<pre>';
var_dump ($_COOKIE);
echo '</pre>'; */
?>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <h1 class="header__logo__h1">PHOENIX.PC</h1>
            </div>
            <nav class="nav">
                <a class="nav__link" href="/index.php">На главную</a>
                <a class="nav__link" href="/parea.php">Личный кабинет</a>
            </nav>
        </div>
    </div>
</header>

<main class="main">
    <div class="container">
        <div class="main__inner">
            <div class="main__item">
                <div class="main__image"></div>
                <div class="main__title"><?php echo $_COOKIE["about_name"] ?></div>
            </div>
            <div class="main__item">
                <div class="main__title">ОПИСАНИЕ:</div>
                <div class="main__about"><?php echo $_COOKIE["about"] ?></div>
                <a class="main__btn" href="Positions/<?php echo $_COOKIE["link"] ?>.php">НАЗАД</a>
            </div>
        </div>
    </div>
</main>

</body>
</html>