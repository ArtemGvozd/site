<?php
define("DB_NAME","catalog");
define("DB_SERVER_NAME","localhost");
define("DB_LOGIN","root");
define("DB_PASW","");

$f=fopen("image.jpg","rb"); // имя файла или картинки -- открыли файл на чтение
$upload=fread($f,filesize("image.jpg")); // считали файл в переменную
fclose($f); // закрыли файл, можно опустить
$upload=addslashes($upload);

$conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW);

$sql= $conect->prepare("INSERT INTO images(bin_data) VALUES(:upload)");
$sql->bindParam(':upload', $upload);
        $sql->execute();
        header('Location: index.php');
        exit();
        
        

?>