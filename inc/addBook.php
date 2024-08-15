<?php
    session_start();
    require_once 'connect.php';

    $bookName = $_POST['bookName'];
    $author = $_POST['author'];
    $style = $_POST['style'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $showTables = mysqli_query($link, "SHOW TABLES FROM 'BookMag' LIKE 'biblio'");

    if($showTables == 1) {
        mysqli_query($link, "INSERT INTO `biblio` (`id`, `bookName`, `author`, `style`, `description`, `price`) 
                            VALUES (NULL, '$bookName', '$author', '$style', '$description', '$price')");
    } else{
        mysqli_query($link, "CREATE TABLE `BookMag`.`biblio` (`id` INT NOT NULL AUTO_INCREMENT , `bookName` VARCHAR(255) NULL , 
                                                                                                `author` VARCHAR(150) NULL , 
                                                                                                `style` VARCHAR(100) NULL , 
                                                                                                `description` VARCHAR(500) NULL, 
                                                                                                `price` VARCHAR(50) NULL,
                                                                                                PRIMARY KEY (`id`)) ENGINE = InnoDB;");
        mysqli_query($link, "INSERT INTO `biblio` (`id`, `bookName`, `author`, `style`, `description`, `price`) 
                            VALUES (NULL, '$bookName', '$author', '$style', '$description', '$price')");
    }
    header('Location: ../biblioAdmin.php');


    