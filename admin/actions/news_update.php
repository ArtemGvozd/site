<?php
$title = "";
$description = "";
$content = "";
$error = array();
if (!empty($_GET['id'])) {
    $sql = $conect->prepare("SELECT * FROM news WHERE id = :id");
    $sql->bindParam(':id', $_GET['id']);
    $sql->execute();
    $result = $sql->fetch();
        if(empty($result)){
            header("Location: index.php");
            exit();
        }
}
if(!empty($_POST)) {
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
            if(strlen($_POST['content'])<150) {
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
    
$result['title'] = $_POST['title'];
$result['description'] = $_POST['description'];
$result['content'] = $_POST['content'];

    if($title && $description && $content) {
        $sql = $conect->prepare("UPDATE news set title = :title, description = :description, content = :content WHERE id = :id");
        $sql->bindParam(':title', $title);
        $sql->bindParam(':description', $description);
        $sql->bindParam(':content', $content);
        $sql->bindParam(':id', $_GET['id']);
        $sql->execute();
        header('Location:index.php');
        die();
    }
}
?>