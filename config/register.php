<?php
    session_start();
    require_once 'database.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $password = md5($password);

        mysqli_query($link,"INSERT INTO `users` (`id_user`, `login`, `password`) VALUES (NULL, '$login', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        $_SESSION['authandreg'] = NULL;
        header('Location: ../parea.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../parea.php');
    }