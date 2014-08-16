<?php
/*
$sql = ("SELECT * FROM products WHERE id = $_GET['id']");
$st = $conect->query($sql);
$result = $st->fetchAll();
foreach($result as $items) {
        echo $items['image_name'] . $items['description'];


$sql = ("SELECT * FROM products");
    $st =  $conect->query($sql);
    $result = $sql->fetchAll();
    print_r($result);


$sql = $conect->prepare("SELECT * FROM products WHERE image_name = :image_name, description = :description, id = :id");
$sql->bindParam(':image_name', $_GET['image_name']);
$sql->bindParam(':description', $_GET['description']);
$sql->bindParam(':id', $_GET['id']);
$sql->execute();
$result = $sql->fetchAll();
    foreach($result as $result) {
        echo $result['image_name'] . $result['description'];
    }

$sql = ("SELECT * FROM products");
$st = $conect->query($sql);
$result = $st->fetchAll();
if(isset($result)) {
    foreach($result as $item) {
        echo $item['description'] . "<br>" .$item['image_name'] ;
    }
}
}*/

$sql = $conect->prepare("SELECT * FROM products");

$sql->execute();
$result = $sql->fetchAll();
foreach($result as $item) {
    echo '<a href="index.php?id=gallery_view&product_id='.$item['id'].'">';
    echo '<img src="gallery/' . $item['image_name'].'" >';
    echo '</a>';
}
?>
