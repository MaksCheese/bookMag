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
    <div class="aboutBooks">
        <table>
            <colgroup>
                <col span="1" style="width: 14%;">
                <col span="1" style="width: 12%;">
                <col span="1" style="width: 7%;">
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 12%;">
            </colgroup>
            <tr style="border: 1px solid black;">
                <th>Название</th>
                <th>Автор</th>
                <th>Жанр</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Дата возврата</th>
            </tr>    
            <?php
                $userLogin = $_SESSION['user']['login'];
                $books = mysqli_query($link, "SELECT * FROM `".$userLogin."`");
                if(!$books){
                    header('Location: main.php');
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
                <td>
                    <?php
                        $sqlQueryDate = mysqli_query($link, "SELECT `date` FROM `".$userLogin."` WHERE id = '$book[0]'");
                        $sqlQueryDate = date("d.m.y");
                        if($book[6] == '2 недели'){
                            echo date('d.m.Y' , strtotime($sqlQueryDate. '+ 14 days'));
                        } elseif($book[6] == '1 месяц'){
                            echo date('d.m.Y' , strtotime($sqlQueryDate. '+ 1 month'));
                        } elseif($book[6] == '3 месяца'){
                            echo date('d.m.Y' , strtotime($sqlQueryDate. '+ 3 month'));
                        }
                     ?>                     
                </td>
                <?php 
                $today = date("d.m.Y");   
                if($today == date('d.m.Y', strtotime($sqlQueryDate. '+ 14 days')) || 
                    $today == date('d.m.Y', strtotime($sqlQueryDate. '+ 1 month')) || 
                    $today == date('d.m.Y', strtotime($sqlQueryDate. '+ 3 month'))){
                    echo '<p class="msg">Срок аренды книги ' . $book[1] . ' вышел!</p>';
                }
                unset($_SESSION['message']);
            ?>
            </tr>
            <?php
                    }
                } 
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
</body>
</html>