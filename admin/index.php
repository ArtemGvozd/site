<?php
// Добавить расширение .файла +
// Вывести Галерею.    ~~ ???
// Начать J.s
// научится создавать DOM elements and delete DOM elements - манипулировать ими. (свойства)
// Bootstrap разобраться.
ob_start();
session_start();
if(empty($_SESSION['in'])) {
    header("Location: authorize.php");
    exit();
}

$action = empty($_GET['r']) ? 'menu_admin' : $_GET['r'];
$allowed = array('menu_admin', 'news_list', 'news_update', 'news_create',
                'news_delete', 'my_page','my_page_update','my_page_create',
                'my_page_delete','admins','products_list','products_create',
                'products_delete','products_update','products_delete_confirm',
                'news_delete_confirm','my_page_delete_confirm');

require_once getcwd() . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'bd' . DIRECTORY_SEPARATOR . 'configuration.php';
$conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW); // подключение к бд
function head() {
    require_once getcwd() . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'head.php';
}
function foot() {
    require_once getcwd() . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'foot.php';
}

if (!in_array($action, $allowed)) {
    die('Invalid request');
} else {
    require_once getcwd() . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . $action . '.php';
    require_once getcwd() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $action . '.php';  
}    