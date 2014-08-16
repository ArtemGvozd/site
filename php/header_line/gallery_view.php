<?php
if(!empty($_GET['product_id'])) {
    $sql = $conect->prepare("SELECT * FROM products WHERE id = :id");
    $sql->bindParam(':id', $_GET['product_id']);
    $sql->execute();
    $result = $sql->fetch();
    if(empty($result)) {
        echo 'Invalid Product id';
    } else {
        echo $result['name'] . "<br>" . $result['description'] . "<br>". '<img src="gallery/' . $result['image_name'].'" >';
    }
} else {
    echo 'Product not found';
}