<?php
    session_start();
    require_once 'connect.php';
    
    $userName = $_POST['userName'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordCheck = $_POST['passwordCheck'];

    $checkLogin = mysqli_query($link, "SELECT * FROM users WHERE login = '$login'");

    if(mysqli_num_rows($checkLogin) > 0) {
        $_SESSION['message'] = 'Такой логин уже существует!';
        header('Location: ../index.php');
    } else{
        if($password === $passwordCheck) {
            $password = sha1($password);

            mysqli_query($link, "INSERT INTO `users` (`id`, `userName`, `login`, `email`, `password`) 
                                VALUES (NULL, '$userName', '$login', '$email', '$password')");
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../authorize.php');
        } else{
            $_SESSION['message'] = 'Пароли на совпадают';
            header('Location: ../index.php');
        }
    }
