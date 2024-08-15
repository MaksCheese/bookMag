<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = sha1($_POST['password']);
    $adminPass = sha1('admin');

    $checkUser = mysqli_query($link, "SELECT * FROM users WHERE login='$login' AND password='$password'");
    $isAdmin = mysqli_query($link, "SELECT * FROM users WHERE login='admin' AND password='admin'");

    if($login == 'admin' && $password == $adminPass){
        header('Location: ../biblioAdmin.php');
    } elseif (mysqli_num_rows($checkUser) > 0){
        $user = mysqli_fetch_assoc($checkUser);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "userName" => $user['userName'],
            "login" => $user['login'],
            "email" => $user['email'],
        ];
        header('Location: ../main.php');
    } else{
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../authorize.php');
    }

