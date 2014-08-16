<?php
if (!empty($_GET['id'])) {
    $sql =$conect->prepare('DELETE FROM products WHERE id = :id');
    $sql->bindParam(':id', $_GET['id']);
    $sql->execute();
    header('Location:index.php?r=products_list');
    die();
}