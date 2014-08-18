<?php
if (!empty($_GET['id'])) {
    //$conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW);
    $sql = $conect->prepare('DELETE FROM news WHERE id = :id');
    $sql->bindParam(':id', $_GET['id']);
    $sql->execute();
    header('Location:index.php?r=news_list');
    die();
}
