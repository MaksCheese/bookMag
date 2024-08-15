<?php
    $link = mysqli_connect('localhost', 'root', '', 'BookMag');
    
    if(!$link){
        die('Не удалось подключиться к базе данных MySQL');
    }