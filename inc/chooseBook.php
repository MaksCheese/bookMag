<?php
    session_start();
    require_once 'connect.php';

    $bookName = $_POST['chooseName'];
    $author = $_POST['chooseAuthor'];
    $style = $_POST['chooseStyle'];
    $description = $_POST['chooseDesc'];
    $price = $_POST['choosePrice'];
    $term = $_POST['term']; 
    $bookPhoto = $_POST['chooseBookPhoto'];
    $today = date("m.d.y");   

    $userLogin = $_SESSION['user']['login'];

    $showTable = mysqli_query($link, "SHOW TABLES FROM 'BookMag' LIKE '".$userLogin."'");
    
    if($showTable == 1){
        mysqli_query($link, "INSERT INTO `".$userLogin."` SET id = NULL, 
                                                            bookName = '$bookName', 
                                                            author = '$author', 
                                                            style = '$style', 
                                                            description = '$description', 
                                                            price = '$price', 
                                                            term = '$term',
                                                            date = '$today'");
    } else {
        mysqli_query($link, "CREATE TABLE `BookMag`.`".$userLogin."` (`id` INT NOT NULL AUTO_INCREMENT , `bookName` VARCHAR(255) NULL , `author` VARCHAR(150) NULL , `style` VARCHAR(100) NULL , 
                                        `description` VARCHAR(500) NULL, `price` VARCHAR(50) NULL, `term` VARCHAR(50) NULL, `date` VARCHAR(50) NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;");
        
        mysqli_query($link, "INSERT INTO `".$userLogin."` SET id = NULL, 
                                                            bookName = '$bookName', 
                                                            author = '$author', 
                                                            style = '$style', 
                                                            description = '$description', 
                                                            price = '$price', 
                                                            term = '$term',
                                                            date = '$today'");
                            
    }

    header('Location: ../biblio.php');

    

    