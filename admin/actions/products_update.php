<?php
$name = "";
$description = "";
$error = array();

if (!empty($_GET['id'])) {
    $sql = $conect->prepare("SELECT * FROM products WHERE id = :id");
    $sql->bindParam(':id', $_GET['id']);
    $sql->execute();
    $result = $sql->fetch();
    if(empty($result)){
        header("Location: index.php");
        exit();
    }
}
if(!empty($_POST)) {
    if(!empty($_POST['name'])) {
        if(is_scalar($_POST['name'])){
            if(strlen($_POST['name'])<50) {
                $name = trim(strip_tags($_POST['name']));
            }else {
                $error[] = "Слишком длинное имя";
            }
        }else {
            $error[] = "не существующие данные";
        }
    }else {
        $error[] = "Напишите имя";
    }
    if(!empty($_POST['description'])) {
        if(is_scalar($_POST['description'])) {
            if(strlen($_POST['description'])<250) {
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

    if(isset($_FILES['image_name'])) {
        $whitelist = array('.gif','.jpg','.png');

        foreach ($whitelist as $item) {
            if(preg_match("/$item\$/i", $_FILES['image_name']['name'])) {
                if($_FILES['image_name']['error']==0) {
                    //$better_token = md5(uniqid(rand(),1)); // лучше, труднее взломать
                    $type = basename($_FILES['image_name']['type']);
                    $temp       = $_FILES['image_name']['tmp_name'];
                    $image_name = $_FILES['image_name']['name'];
                    $image_name = md5(uniqid("$image_name ")) ."." . $type; // без префикса
                    move_uploaded_file ($temp, '../gallery/'. $image_name);
                } else {
                    $error = "не правильная загрузка файла";
                }
            }
        }
    }

    $result['name'] = $_POST['name'];
    $result['description'] = $_POST['description'];

    if($name && $description) {
        $sql = $conect->prepare("UPDATE products set name = :name, description = :description WHERE id = :id");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':description', $description);
        $sql->bindParam(':id', $_GET['id']);
        $sql->execute();

        if(!empty($image_name)) {
            $sql = $conect->prepare("UPDATE products set image_name = :image_name WHERE id = :id");
            $sql->bindParam(':image_name', $image_name);
            $sql->bindParam(':id', $_GET['id']);
            $sql->execute();
        }
        header('Location:index.php?r=products_list');
        die();
    }
}
?>