<?php
    //Определяет именованную константу при запуске
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'example_2022');

    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($mysqli -> connect_errno){
        echo "Произошла ошибка подключения к БД" .mysqli_connect_error();
    }
    else
    
?>