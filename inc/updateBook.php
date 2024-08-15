<?php
    session_start();
    require_once 'connect.php';

    $id = $_POST['id'];
    $bookName = $_POST['redBookName'];
    $author = $_POST['redAuthor'];
    $style = $_POST['redStyle'];
    $description = $_POST['redDescription'];
    $price = $_POST['redPrice'];

    mysqli_query($link, "UPDATE `biblio` SET bookName = '$bookName', 
                                            author = '$author', 
                                            style = '$style', 
                                            description = '$description', 
                                            price = '$price' 
                                            WHERE `biblio`.`id` = '$id'");
    header('Location: ../biblioAdmin.php');

    