<?php
require_once "../config/database.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processor</title>
    <link rel="stylesheet" href="/style_conf.css">
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
<?php
/*echo '<pre>';
var_dump ($_COOKIE);
echo '</pre>';*/
?>
    <div class="configurator-page">

        <table>
            <tr>
                <th>ID</th>
                <th>Наименование</th>
                <th>Сокет</th>
                <th>Кол-во ядер</th>
                <th>Частота ядра</th>
                <th>Техпроцесс</th>
                <th>Кол-во потоков</th>
                <th>Объем кэша</th>
                <th>Макс. объем ram</th>
                <th>Видеоядро</th>
                <th>Потребление Вт</th>
                <th>Цена</th>
                <th>    </th>
                <th>    </th>
            </tr>

            <?php

            $sql = "SELECT * FROM cpu";

            $result = mysqli_query($link, $sql);

            $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

            foreach ($position as $processor){
                ?>
                <tr>
                    <td><?= $processor["id"] ?></td>
                    <td><?= $processor["name"] ?></td>
                    <td><?= $processor["socet"] ?></td>
                    <td><?= $processor["core_vol"] ?></td>
                    <td><?= $processor["core_rate"] ?></td>
                    <td><?= $processor["tech_proc"] ?></td>
                    <td><?= $processor["thread_vol"] ?></td>
                    <td><?= $processor["cache_amount"] ?></td>
                    <td><?= $processor["max_ram_amount"] ?></td>
                    <td><?= $processor["graphic_core"] ?></td>
                    <td><?= $processor["wt"] ?></td>
                    <td><?= $processor["price"].' Rub' ?></td>
                    <td><a href="../configurator.php?id_processor=<?= $processor["id"] ?>&name_processor=<?= $processor["name"] ?>&socet_processor=<?= $processor["socet"] ?>&wt_processor=<?= $processor["wt"] ?>&price_processor=<?= $processor["price"] ?>">Выбрать</a>
                    <td><a href="../about.php?about_id_processor=<?= $processor["id"] ?>&about_name_processor=<?= $processor["name"] ?>&about_processor=<?= $processor["about"] ?>&link=processor">Подробнее...</a></td>
                </tr>
                <?php
            }

            ?>

        </table>
    </div>
</body>
</html>