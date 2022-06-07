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
        <th>Тип </th>
        <th>Цена</th>
        <th>    </th>
        <th>    </th>

    </tr>

    <?php

    $sql = "SELECT * FROM `case` WHERE `type_mb` = '$_COOKIE[type_mb]'";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $case){
        ?>
        <tr>
            <td><?= $case["id"] ?></td>
            <td><?= $case["name"] ?></td>
            <td><?= $case["type_mb"] ?></td>
            <td><?= $case["price"].' Rub' ?></td>
            <td><a href="../configurator.php?id_case=<?= $case["id"] ?>&name_case=<?= $case["name"] ?>&type_case_mb=<?= $case["type_case_mb"] ?>&price_case=<?= $case["price"] ?>">Выбрать</a>
            <td><a href="../about.php?about_id_case=<?= $case["id"] ?>&about_name_case=<?= $case["name"] ?>&about_case=<?= $case["about"] ?>&link=case">Подробнее...</a></td>
        </tr>
        <?php
    }

    ?>

</table>
    </div>
</body>
</html>