<?php
session_start();
require_once "database.php";

    if ($_SESSION["user"]["id"]) {
        $id_user = $_SESSION["user"]["id"];
        $id_cpu =$_COOKIE["id_processor"];
        $id_cooler =$_COOKIE["id_cooler"];
        $id_ram =$_COOKIE["id_ram"];
        $id_mb =$_COOKIE["id_mb"];
        $id_hdd =$_COOKIE["id_hdd"];
        $id_gpu =$_COOKIE["id_gpu"];
        $id_pu =$_COOKIE["id_pu"];
        $id_case =$_COOKIE["id_case"];
        mysqli_query($link, "INSERT INTO `history` (`id`, `name`, `id_user`, `id_cpu`, `id_cooler`, `id_ram`, `id_mb`, `id_hdd`, `id_gpu`, `id_pu`, `id_case`) VALUES (NULL, 'Сборка', '$id_user', '$id_cpu', '$id_cooler', '$id_ram', '$id_mb', '$id_hdd', '$id_gpu', '$id_pu', '$id_case')");
    }

    header("Location: ../parea.php");