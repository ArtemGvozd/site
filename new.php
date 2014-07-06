<?php
 // Отсылаем браузеру заголовок, сообщающий о том, что сейчас будет 
//передаваться файл изображения
// Сначала проверим определена ли переменная id
if ( isset( $_GET['id'] ) ) {
  // Здесь $id номер изображения
  $id = $_GET['id'];
  // Выполняем запрос и получаем файл
 $sql = $conect->prepare("SELECT bin_data FROM images WHERE id = :id");
    $sql->bindParam(':id', $_GET['id']);
    $sql->execute();
    $result = $sql->fetch();
    header("Content-type: image/gif");
    echo $result;
}  
        ?>