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
    <?php include 'templates/nav.php';?>
        <table>
            <colgroup>
                <col span="1" style="width: 14%;">
                <col span="1" style="width: 12%;">
                <col span="1" style="width: 7%;">
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 12%;">
                <col span="1" style="width 5%;">
            </colgroup>
            <tr style="border: 1px solid black;">
                <th>Название</th>
                <th>Автор</th>
                <th>Жанр</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Срок аренды</th>
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
            <form method="post" action="inc/chooseBook.php">
                <tr style="border: 1px solid black;">
                    <td name="chooseName"><?= $book[1];?><input type="hidden" name="chooseName" value="<?= $book[1];?>"></td>
                    <td name="chooseAuthor"><?= $book[2];?><input type="hidden" name="chooseAuthor" value="<?= $book[2];?>"></td>
                    <td name="chooseStyle"><?= $book[3];?><input type="hidden" name="chooseStyle" value="<?= $book[3];?>"></td>
                    <td name="chooseDesc"><?= $book[4];?><input type="hidden" name="chooseDesc" value="<?= $book[4];?>"></td>
                    <td name="choosePrice"><?= $book[5];?><input type="hidden" name="choosePrice" value="<?= $book[5];?>"></td>
                    <td name="chooseTerm">
                        <select name="term" id="">
                            <option name="week" value="2 недели">2 неделя</option>
                            <option name="month" value="1 месяц">1 месяц</option>
                            <option name="3Month" value="3 месяца">3 месяца</option>
                        </select>
                    </td>
                    <td><button type="submit" class="image-button" style="border: none;"><img src="imgs/icons/addBook.svg" style="width: 30px; height: 30px"></button></td>               
                </tr>
            </form>
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