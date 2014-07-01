<?php
$title="";
$description="";
$content="";
$error = array();

if(!empty($_POST['buton'])) {
    if(!empty($_POST['title'])) {
        if(is_scalar($_POST['title'])){
            if(strlen($_POST['title'])<30) {
                $title = trim(strip_tags($_POST['title']));
            }else {
                $error[] = "Слишком длинный заголовок";
            }
        }else {
            $error[] = "не существующие данные";
        }
    }else {
        $error[] = "Отсутствует заголовок!";
    }
    if(!empty($_POST['description'])) {
        if(is_scalar($_POST['description'])) {
            if(strlen($_POST['description'])<50) {
                $description = trim(strip_tags($_POST['description']));
            }else {
                $error[] = "Слишком длинное описание";
            }
        }else {
            $error[] = "Повторите попытку";
        }
    }else {
        $error[] = "Введите описание";
    }
    if(!empty($_POST['content'])) {
        if(is_scalar($_POST['content'])) {
            if(strlen($_POST['content'])<200) {
                $content = trim(strip_tags($_POST['content']));
            }else {
                $error[] = "Очень много написали :)";
            }
        }else {
            $error = "Повторите попытку";
        }
    }else {
        $error[] = "Введите содержимое";
    }
}
if($title && $description && $content) { // prepare - подготавливает запрос
    $sql = $conect->prepare("INSERT INTO news(title,description,content)VALUES(:title, :description, :content)");
    $sql->bindParam(':title', $title);
    $sql->bindParam(':description', $description);
    $sql->bindParam(':content', $content);
    $sql->execute(); //Выполняет запрос
    header('Location: index.php?r=news_list');
    die();
}