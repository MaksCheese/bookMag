<?php
    session_start();
    require_once 'inc/connect.php';

    $bookID = $_GET['id'];
    $books = mysqli_query($link, "SELECT * FROM `biblio` WHERE id = '$bookID'");

    if(!$books){
        echo "Error: " . mysqli_error($link);
    } 
    $booksArr = mysqli_fetch_all($books);
    foreach($booksArr as $book){

    }
    
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
    <div class="form">
        <form method="post" action="inc/updateBook.php">
            <input type="hidden" name="id" value="<?=$book[0];?>">
            <div class="mb-3">
                <label class="form-label">Название книги</label>
                <input type="text" class="form-control" name="redBookName" value="<?php print_r($book[1]);?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Автор</label>
                <input type="text" class="form-control"  name="redAuthor" value="<?php print_r($book[2]);?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Жанр</label>
                <input type="text" class="form-control" name="redStyle" value="<?php print_r($book[3]);?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Краткое описание</label>
                <textarea class="form-control input-textarea" name="redDescription" style="width: 350px; height: 100px"><?php print_r($book[4]);?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Цена</label>
                <input type="text" class="form-control" name="redPrice" value="<?php print_r($book[5]);?>">
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
</body>
</html>