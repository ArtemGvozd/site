<style type="text/css">
    img{
        padding-left: 20px;
        padding-top:  20px;
    }
</style>
<?php
$sql = $conect->prepare("SELECT * FROM products");
$sql->execute();
$result = $sql->fetchAll();
foreach ($result as $item) {
    echo '<a href="index.php?id=gallery_view&product_id=' . $item['id'] . '">';
    echo '<img src="gallery/' . $item['image_name'] . '" width="300" height="400">';
    echo '</a>';
}
?>
