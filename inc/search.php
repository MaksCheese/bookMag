<?php
    session_start();
    require_once 'connect.php';

    $search = $_POST['search'];
    $searchButton = $_POST['searchButton'];

    $_SESSION['search'] = $searh;

    if(isset($_POST['searchButton'])){
        mysqli_query($link, "SELECT * FROM biblio WHERE bookName = '$search' OR author = '$search' OR style = '$search'");
    }
    header('Location: ../searchResult.php');
?>
