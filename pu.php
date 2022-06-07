<?php
require_once "../config/database.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processor</title>
    <link rel="stylesheet" href="../style_conf.css">
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background: #606060;
        color: white;
    }
    td {
        background: #898989;
        color: white;
    }
</style>
<body class="body">
<div class="configurator-page">
<table>
    <tr>
        <th>ID</th>
        <th>Наименование</th>
        <th>Тип PU</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>
        <th>    </th>

    </tr>
    <?php

    $wt_all = $_COOKIE['wt_processor'] + $_COOKIE['wt_cooler'] + $_COOKIE['wt_ram'] + $_COOKIE['wt_mb'] + $_COOKIE['wt_gpu'] + $_COOKIE['wt_hdd'];

    $wt_all *=2;

    var_dump($wt_all);

    $sql = "SELECT * FROM pu WHERE wt > ".$wt_all;

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $pu){
        ?>
        <tr>
            <td><?= $pu["id"] ?></td>
            <td><?= $pu["name"] ?></td>
            <td><?= $pu["type_pu"] ?></td>
            <td><?= $pu["wt"] ?></td>
            <td><?= $pu["price"].' Rub' ?></td>
            <td><a href="../configurator.php?id_pu=<?= $pu["id"] ?>&name_pu=<?= $pu["name"] ?>&type_pu=<?= $pu["type_ram"] ?>&wt_pu=<?= $pu["wt"] ?>&price_pu=<?= $pu["price"] ?>">Выбрать</a>
            <td><a href="../about.php?about_id_pu=<?= $pu["id"] ?>&about_name_pu=<?= $pu["name"] ?>&about_pu=<?= $pu["about"] ?>&link=pu">Подробнее...</a></td>
        </tr>
        <?php
    }

    ?>

</table>
</div>
</body>
</html>
