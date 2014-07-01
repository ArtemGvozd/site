<?php
$name     = "";
$login    = "";
$pasword  = "";
$paswor_d = "";
$error    = array();

if(!empty($_POST['buton'])) {
    if(!empty($_POST['name'])) {
        if(is_scalar($_POST['name'])) {
            if(strlen($_POST['name'])<20) {
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
    
    if(!empty($_POST['login'])) {
        if(is_scalar($_POST['login'])) {
            if(strlen($_POST['login'])<20) {
                $login= trim(strip_tags($_POST['login']));
            }else {
                $error[] = "Слишком длинный логин";
            }
        }else {
            $error[] = "Не существующие данные";
        }
    }else {
        $error[] = "Введите Логин";
    }
    
    if(!empty($_POST['pasword'])) {
        if(is_scalar($_POST['pasword'])) {
            if (strlen($_POST['pasword']) < 20) {
                     $pasword = trim(strip_tags($_POST['pasword']));
            } else {
                $error[] = "Слишком длинный пароль";
            }
        } else {
            $error[] = "Не существующий пароль";
        }
    } else {
        $error[] = "Введите ПАРОЛЬ";
    }
    
    if(!empty($_POST['paswor_d'])) {
        if(is_scalar($_POST['paswor_d'])) {
            if (strlen($_POST['paswor_d']) < 20) {
                    $paswor_d=  trim(strip_tags($_POST['paswor_d']));
            } else {
                $error[] = "Слишком длинный пароль";
            }
        } else {
            $error[] = "Не существующий пароль";
        }
    } else {
        $error[] = "Введите ПАРОЛЬ";
    }
    if (empty($error)) {
        $sql= $conect->prepare("INSERT INTO admin(name,login,pasword)VALUES(:name, :login, :pasword)");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':login', $login);
        $sql->bindParam(':pasword', $pasword);
        $sql->execute();
        header('Location: index.php?r=admins');
        exit();
    }
}
?>
