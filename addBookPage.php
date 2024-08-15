<?php
    session_start();
    require_once 'inc/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление книги</title>
    <link rel="stylesheet" href="css/main.css">
    <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet"   
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
</head>
<body>
    <?php include 'templates/navAdmin.php';?>
    <div class="form">
        <form class="formReg" method="post" action="inc/addBook.php" enctype="multipart/form-data">            
            <div class="mb-3">
                <label class="form-label">Название книги</label>
                <input type="text" class="form-control" name="bookName">
            </div>
            <div class="mb-3">
                <label class="form-label">Автор</label>
                <input type="text" class="form-control"name="author">
            </div>
            <div class="mb-3">
                <label class="form-label">Жанр</label>
                <input type="text" class="form-control"name="style">
            </div>
            <div class="mb-3">
                <label class="form-label">Краткое описание</label>
                <textarea class="form-control input-textarea" name="description" style="width: 350px; height: 100px"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Цена</label>
                <input type="text" class="form-control" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
            
            <?php 
                if($_SESSION['message']){
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
</body>
</html>