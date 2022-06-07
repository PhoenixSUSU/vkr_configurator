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
        <th>Тип RAM</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM ram";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $ram){
        ?>
        <tr>
            <td><?= $ram["id"] ?></td>
            <td><?= $ram["name"] ?></td>
            <td><?= $ram["type_ram"] ?></td>
            <td><?= $ram["wt"] ?></td>
            <td><?= $ram["price"].' Rub' ?></td>
            <td><a href="../configurator.php?id_ram=<?= $ram["id"] ?>&name_ram=<?= $ram["name"] ?>&type_ram=<?= $ram["type_ram"] ?>&wt_ram=<?= $ram["wt"] ?>&price_ram=<?= $ram["price"] ?>">Выбрать</a>
            <td><a href="../about.php?about_id_ram=<?= $ram["id"] ?>&about_name_ram=<?= $ram["name"] ?>&about_ram=<?= $ram["about"] ?>&link=ram">Подробнее...</a></td>
        </tr>
        <?php
    }

    ?>

</table>
</div>
</body>
</html>