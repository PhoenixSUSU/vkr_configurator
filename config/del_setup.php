<?php
require_once "database.php";

$id_del_setup = $_GET["id_del_setup"];
$sql = "DELETE FROM `history` WHERE id = '$id_del_setup'";
mysqli_query($link, $sql);

header("Location: ../parea.php");