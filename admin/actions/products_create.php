<?php
$name        = "";
$description = "";
$image_name  = "";
$error       = array();

if(!empty($_POST['buton'])) {
    if(!empty($_POST['name'])) {
        if(is_scalar($_POST['name'])) {
            if(strlen($_POST['name'])<40) {
                $name = trim(strip_tags($_POST['name']));
            }else {
                $error[] = "Слишком длинное имя";
            }
        }else {
            $error[] = "Несуществующие данные";
        }
    }else {
        $error[] = "Введите имя";
    }

    if(!empty($_POST['description'])) {
        if(is_scalar($_POST['description'])) {
            if(strlen($_POST['description'])<200) {
                $description= trim(strip_tags($_POST['description']));
            }else {
                $error[] = "Слишком длинное описание";
            }
        }else {
            $error[] = "Не существующие данные";
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

    if($name && $description && $image_name) {
        $sql= $conect->prepare("INSERT INTO products(name,description,image_name)VALUES(:name, :description, :image_name)");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':description', $description);
        $sql->bindParam(':image_name', $image_name);
        $sql->execute();
        header('Location: index.php?r=products_list');
    exit();
}
}


