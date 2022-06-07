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
        <th>Сокет</th>
        <th>Тип RAM</th>
        <th>Тип MB</th>
        <th>WT</th>
        <th>Цена</th>
        <th>    </th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM `mb` WHERE `socet` = '$_COOKIE[socet_processor]'";


    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $mb){
        ?>
        <tr>
            <td><?= $mb["id"] ?></td>
            <td><?= $mb["name"] ?></td>
            <td><?= $mb["socet"] ?></td>
            <td><?= $mb["type_ram"] ?></td>
            <td><?= $mb["type_mb"] ?></td>
            <td><?= $mb["wt"] ?></td>
            <td><?= $mb["price"].' Rub' ?></td>
            <td><a href="../configurator.php?id_mb=<?= $mb["id"] ?>&name_mb=<?= $mb["name"] ?>&socet_mb=<?= $mb["socet"] ?>&type_mb=<?= $mb["type_mb"] ?>&wt_mb=<?= $mb["wt"] ?>&price_mb=<?= $mb["price"] ?>">Выбрать</a>
            <td><a href="../about.php?about_id_mb=<?= $mb["id"] ?>&about_name_mb=<?= $mb["name"] ?>&about_mb=<?= $mb["about"] ?>&link=mb">Подробнее...</a></td>
        </tr>
        <?php
    }

    ?>

</table>
</div>
</body>
</html>