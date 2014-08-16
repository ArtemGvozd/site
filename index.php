<?php
session_start();
include 'bd/configuration.php';
$conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW);
?>
<!DOCTYPE html>
<html>
<head>
    <title> Моя Первая страница<?php $title?> </title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
</head>

<body><div class="admin"><a href="admin/authorize.php"> войти </a></div>
    <div id="wrapper">
        <div id="header">
            <div id="logo"></div>
            <div id="slogan"><div class="slogan"><b>Изготовление корпусной мебели в Мелитополе.</b></div></div>
        </div>
            <div id="header_line">
                <div id="glavnaj"><a href="index.php?id=glavnaj"><div id="butons">Главная</div></a></div>
                <div id="contacts"><a href="index.php?id=contacts"><div id="butons">Контакты</div></a></div>
                <div id="galery"><a href="index.php?id=gallery"><div id="butons">Галерея</div></a></div>
                <div id="obratnaj"><a href="index.php?id=obratnaj"><div id="butons">НапишитеНам</div></a></div>
            </div>
        <div id="content"><?php include 'php/content/content.php';?></div>
        <div id="footer">&copy; Мебель под заказ в Мелитополе <?= date('Y')?>г.</div>
    </div>
</body>
</html>
