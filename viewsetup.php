
<pre>
<?php
    session_start();
    print_r($_COOKIE);
    print_r($_GET);
?>
</pre>


<?php

    require_once "database.php";

    $setup = [
            "id_processor"=> "",
            "name_processor"=> "",
            "socet_processor"=> "",
            "wt_processor"=> "",
            "price_processor"=> "",
        "id_cooler"=> "",
        "name_cooler"=> "",
        "socet_cooler"=> "",
        "wt_cooler"=> "",
        "price_cooler"=> "",
            "id_ram"=> "",
            "name_ram"=> "",
            "type_ram"=> "",
            "wt_ram"=> "",
            "price_ram"=> "",
        "id_mb"=> "",
        "name_mb"=> "",
        "socet_mb"=> "",
        "type_mb_ram"=> "",
        "type_mb"=> "",
        "wt_mb"=> "",
        "price_mb"=> "",
            "id_hdd"=> "",
            "name_hdd"=> "",
            "gb_hdd"=> "",
            "wt_hdd"=> "",
            "price_hdd"=> "",
        "id_gpu"=> "",
        "name_gpu"=> "",
        "type_gpu"=> "",
        "wt_gpu"=> "",
        "price_gpu"=> "",
            "id_pu"=> "",
            "name_pu"=> "",
            "type_pu"=> "",
            "wt_pu"=> "",
            "price_pu"=> "",
        "id_case"=> "",
        "name_case"=> "",
        "type_case_mb"=> "",
        "price_case"=> "",
    ];



    $sql = "SELECT * FROM cpu";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $processor){
       if ($processor["id"] === $_GET["id_cpu"]) {
           $setup["id_processor"] = $processor["id"];
           $setup["name_processor"] = $processor["name"];
           $setup["socet_processor"] = $processor["socet"];
           $setup["wt_processor"] = $processor["wt"];
           $setup["price_processor"] = $processor["price"];
       }
    }

    $sql = "SELECT * FROM cooler";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $cooler){
        if ($cooler["id"] === $_GET["id_cooler"]) {
            $setup["id_cooler"] = $cooler["id"];
            $setup["name_cooler"] = $cooler["name"];
            $setup["socet_cooler"] = $cooler["socet"];
            $setup["wt_cooler"] = $cooler["wt"];
            $setup["price_cooler"] = $cooler["price"];
        }
    }

    $sql = "SELECT * FROM ram";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

     foreach ($position as $ram){
        if ($ram["id"] === $_GET["id_ram"]) {
            $setup["id_ram"] = $ram["id"];
            $setup["name_ram"] = $ram["name"];
            $setup["type_ram"] = $ram["type_ram"];
            $setup["wt_ram"] = $ram["wt"];
            $setup["price_ram"] = $ram["price"];
        }
    }

    $sql = "SELECT * FROM mb";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $mb){
        if ($mb["id"] === $_GET["id_mb"]) {
            $setup["id_mb"] = $mb["id"];
            $setup["name_mb"] = $mb["name"];
            $setup["socet_mb"] = $mb["socet"];
            $setup["type_mb_ram"] = $mb["type_ram"];
            $setup["type_mb"] = $mb["type_mb"];
            $setup["wt_mb"] = $mb["wt"];
            $setup["price_mb"] = $mb["price"];
        }
    }

    $sql = "SELECT * FROM hdd";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $hdd){
        if ($hdd["id"] === $_GET["id_hdd"]) {
            $setup["id_hdd"] = $hdd["id"];
            $setup["name_hdd"] = $hdd["name"];
            $setup["gb_hdd"] = $hdd["gb"];
            $setup["wt_hdd"] = $hdd["wt"];
            $setup["price_hdd"] = $hdd["price"];
        }
    }

    $sql = "SELECT * FROM gpu";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $gpu){
        if ($gpu["id"] === $_GET["id_gpu"]) {
            $setup["id_gpu"] = $gpu["id"];
            $setup["name_gpu"] = $gpu["name"];
            $setup["type_gpu"] = $gpu["type_gpu"];
            $setup["wt_gpu"] = $gpu["wt"];
            $setup["price_gpu"] = $gpu["price"];
        }
    }

    $sql = "SELECT * FROM pu";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $pu){
        if ($pu["id"] === $_GET["id_pu"]) {
            $setup["id_pu"] = $pu["id"];
            $setup["name_pu"] = $pu["name"];
            $setup["type_pu"] = $pu["type_pu"];
            $setup["wt_pu"] = $pu["wt"];
            $setup["price_pu"] = $pu["price"];
        }
    }

    $sql = "SELECT * FROM case";

    $result = mysqli_query($link, $sql);

    $position = mysqli_fetch_all($result, MYSQLI_ASSOC) ;

    foreach ($position as $case){
        if ($case["id"] === $_GET["id_case"]) {
            $setup["id_case"] = $case["id"];
            $setup["name_case"] = $case["name"];
            $setup["type_case_mb"] = $case["type_mb"];
            $setup["price_case"] = $case["price"];
        }
    }


    header("Location: ../configurator.php"."?id_processor=".$setup["id_processor"]."&name_processor=".$setup["name_processor"]."&socet_processor=".$setup["socet_processor"]."&wt_processor=".$setup["wt_processor"]."&price_processor=".$setup["price_processor"]
        ."&id_cooler=".$setup["id_cooler"]."&name_cooler=".$setup["name_cooler"]."&socet_cooler=".$setup["socet_cooler"]."&wt_cooler=".$setup["wt_cooler"]."&price_cooler=".$setup["price_cooler"]
        ."&id_ram=".$setup["id_ram"]."&name_ram=".$setup["name_ram"]."&type_ram=".$setup["type_ram"]."&wt_ram=".$setup["wt_ram"]."&price_ram=".$setup["price_ram"]
        ."&id_mb=".$setup["id_mb"]."&name_mb=".$setup["name_mb"]."&socet_mb=".$setup["socet_mb"]."&type_mb_ram=".$setup["type_mb_ram"]."&type_mb=".$setup["type_mb"]."&wt_mb=".$setup["wt_mb"]."&price_mb=".$setup["price_mb"]
        ."&id_hdd=".$setup["id_hdd"]."&name_hdd=".$setup["name_hdd"]."&gb_hdd=".$setup["gb_hdd"]."&wt_hdd=".$setup["wt_hdd"]."&price_hdd=".$setup["price_hdd"]
        ."&id_gpu=".$setup["id_gpu"]."&name_gpu=".$setup["name_gpu"]."&type_gpu=".$setup["type_gpu"]."&wt_gpu=".$setup["wt_gpu"]."&price_gpu=".$setup["price_gpu"]
        ."&id_pu=".$setup["id_pu"]."&name_pu=".$setup["name_pu"]."&type_pu=".$setup["type_pu"]."&wt_pu=".$setup["wt_pu"]."&price_pu=".$setup["price_pu"]
        ."&id_case=".$setup["id_case"]."&name_case=".$setup["name_case"]."&type_case_mb=".$setup["type_case_mb"]."&price_case=".$setup["price_case"]
    );
?>

