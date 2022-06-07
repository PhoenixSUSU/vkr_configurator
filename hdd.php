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
        <th>ГБ</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM hdd";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $hdd){
        ?>
        <tr>
            <td><?= $hdd["id"] ?></td>
            <td><?= $hdd["name"] ?></td>
            <td><?= $hdd["gb"] ?></td>
            <td><?= $hdd["wt"] ?></td>
            <td><?= $hdd["price"].' Rub' ?></td>
            <td><a href="../configurator.php?id_hdd=<?= $hdd["id"] ?>&name_hdd=<?= $hdd["name"] ?>&gb_hdd=<?= $hdd["gb"] ?>&wt_hdd=<?= $hdd["wt"] ?>&price_hdd=<?= $hdd["price"] ?>">Выбрать</a>
            <td><a href="../about.php?about_id_hdd=<?= $hdd["id"] ?>&about_name_hdd=<?= $hdd["name"] ?>&about_hdd=<?= $hdd["about"] ?>&link=hdd">Подробнее...</a></td>
        </tr>
        <?php
    }

    ?>

</table>
</div>
</body>
</html>