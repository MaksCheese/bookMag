<?php
    session_start();
    require_once 'inc/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/main.css">
    <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet"   
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
</head>
<body>
    <?php include 'templates/nav.php';?>
    <div class="hello">
            <img src="imgs/bookMain.png" alt="" style="width: 500px; height: 700px;">
            <div class="textAbout">
                <h1 class="headHello">Lorem ipsu eum? Suscipit aspernatur a dicta ratione dolorum vero!</h1>
                <p class="textHello">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, ut dolor optio odit 
                    eum vero dignissimos placeat unde, asperiores officiis doloribus rerum veniam tempora 
                    qui officia soluta corporis nisi magni.
                </p>
                <p>
                    Для начала зайдите в <a href="biblio.php" style="color: blue; text-decoration: none;">библиотеку</a> и выберите понравившуюся книгу! 
                </p>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
</body>
</html>