<?php
    session_start();
    require_once 'connect.php';

    $bookID = $_GET['id'];

    mysqli_query($link, "DELETE FROM `biblio` WHERE id = '$bookID'");
    header('Location: ../biblioAdmin.php');