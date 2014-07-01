<?php

include 'bd/configuration.php';
$conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW);
?>
<!DOCTYPE html>
<html>
<head>
    
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Моя Первая страница<?php $title?> </title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body><div class="admin"><a href="admin/authorize.php"> войти </a></div>
    <div id="wrapper">
        <div id="header">
            <div id="logo"></div>
            <div id="slogan"><h2><b>Изготовление корпусной мебели в Мелитополе</b></h2></div>
        </div>
            <div id="header_line">
                <div id="glavnaj"><a href="index.php?id=glavnaj">Главная</a></div>
                <div id="contacts"><a href="index.php?id=contacts">Контакты</a></div>
                <div id="galery"><a href="index.php?id=galery">Галерея</a></div>
                <div id="obratnaj"><a href="index.php?id=obratnaj">Напишите нам</a></div>
            </div>  
        <div id="content"><?php include 'php/content/content.php';?></div>
        <div id="footer">&copy; Мебель под заказ в Мелитополе <?= date('Y')?>г.</div>
    </div>
</body>
</html>
