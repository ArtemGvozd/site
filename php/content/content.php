<?php
$id='glavnaj';
if(isset($_GET['id'])){
    $id = strtolower(strip_tags(trim($_GET['id'])));
}
switch ($id) {
case 'contacts': include 'php/header_line/contacts.php'; break;
case 'glavnaj': include 'php/header_line/glavnaj.php';    break;
case 'galery': include 'php/header_line/galery.php';    break;
case 'obratnaj':include 'php/header_line/obratnaj.php';    break;
}

/*
- Contact form
    
- Форма:
    - Name (Имя)
    - Phone (Контактный телефон)
    - Email (адрес почтовый) - вспоминаем про filter_var(...)...
    - Message (Сообщение)

- Таблица в БД
    - id
    - date_sent (datetime, дата отправки)
    - phone
    - name
    - email
    - message

Запросы к БД писать с помощью PHP PDO (обьектно ориентированный стиль)!!!!!!!!!!!!!!


*/