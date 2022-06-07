<?php

session_start();
if ($_SESSION['authandreg']) {
    $_SESSION['authandreg'] = Null;
} else {
    $_SESSION['authandreg'] = 1;
}

header("Location: ../parea.php");