<?php

    session_start();
    require_once 'database.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            'id' => $user['id_user'],
            'login' => $user['login'],
        ];

        $_SESSION['authandreg'] = 2;

        header('Location: ../parea.php');

    }else {
        $_SESSION['message'] = 'Неверный логин или пароль!';
        header('Location: ../parea.php');
    }