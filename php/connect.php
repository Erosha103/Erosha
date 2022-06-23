<?php

    $connect = mysqli_connect('Erosha', 'root', 'root', 'users');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>