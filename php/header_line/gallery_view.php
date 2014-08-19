<style type="text/css">
    img{
        padding-left: 20px;
        padding-top:  10px;
    }
    p{
        font-family: "Arial";
        text-align: center;
        padding-top: 20px;
    }
</style>
<?php
if (!empty($_GET['product_id'])) {
    $sql = $conect->prepare("SELECT * FROM products WHERE id = :id");
    $sql->bindParam(':id', $_GET['product_id']);
    $sql->execute();
    $result = $sql->fetch();
    if (empty($result)) {
        echo 'Invalid Product id';
    } else {
        echo "<p>";
        echo $result['name'] . "<br>" . $result['description'] . "<br>" . '<img src="gallery/' . $result['image_name'] . '" width="400" height="500" >';
        echo "</p>";
    }
} else {
    echo 'Product not found';
}