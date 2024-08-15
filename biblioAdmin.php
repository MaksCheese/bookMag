<?php
    session_start();
    require_once 'inc/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Библиотека</title>
    <link rel="stylesheet" href="css/main.css">
    <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet"   
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
</head>
<body>
    <?php include 'templates/navAdmin.php';?>    
        <table>
            <colgroup>
                <col span="1" style="width: 15%;">
                <col span="1" style="width: 15%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <tr style="border: 1px solid black;">
                <th>Название</th>
                <th>Автор</th>
                <th>Жанр</th>
                <th>Описание</th>
                <th>Цена</th>
            </tr>    
            <?php
                $books = mysqli_query($link, "SELECT * FROM biblio");
                if(!$books){
                    $error = mysqli_error($link);
                    echo "Error: $error";
                } else{
                    $books = mysqli_fetch_all($books);
                    foreach($books as $book){        
            ?>
            
            <tr style="border: 1px solid black;">
                <td><?= $book[1];?></td>
                <td><?= $book[2];?></td>
                <td><?= $book[3];?></td>
                <td><?= $book[4];?></td>
                <td><?= $book[5];?></td>
                <td><a href="updateBookPage.php?id=<?= $book[0];?>" title="Редактировать"><img src="imgs/icons/redactIcon.svg"></a></td>
                <td><a href="inc/deleteBook.php?id=<?= $book[0];?>" title="Удалить"><img src="imgs/icons/deleteIcon.svg" style="width: 30px; height: 30px"></a></td>
            </tr>
            <?php
                    }
                } 
            ?>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
</body>
</html>