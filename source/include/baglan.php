<?php 
    session_start();
    $sunucu = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'yc196502005';

    $baglan = mysqli_connect($sunucu,$username,$password,$database);
    mysqli_query($baglan,'SET NAMES UTF8');
    date_default_timezone_set('Europe/Istanbul');
?>    