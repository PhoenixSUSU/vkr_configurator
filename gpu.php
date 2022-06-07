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
        <th>Тип GPU</th>
        <th>Потребление Вт</th>
        <th>Цена</th>
        <th>    </th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM gpu";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $gpu){
        ?>
        <tr>
            <td><?= $gpu["id"] ?></td>
            <td><?= $gpu["name"] ?></td>
            <td><?= $gpu["type_gpu"] ?></td>
            <td><?= $gpu["wt"] ?></td>
            <td><?= $gpu["price"].' Rub' ?></td>
            <td><a href="../configurator.php?id_gpu=<?= $gpu["id"] ?>&name_gpu=<?= $gpu["name"] ?>&type_gpu=<?= $gpu["type_gpu"] ?>&wt_gpu=<?= $gpu["wt"] ?>&price_gpu=<?= $gpu["price"] ?>">Выбрать</a>
            <td><a href="../about.php?about_id_gpu=<?= $gpu["id"] ?>&about_name_gpu=<?= $gpu["name"] ?>&about_gpu=<?= $gpu["about"] ?>&link=gpu">Подробнее...</a></td>
        </tr>
        <?php
    }

    ?>

</table>
</div>
</body>
</html>