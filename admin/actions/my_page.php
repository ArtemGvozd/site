<?php
    // SELECT * FROM admin WHERE login = :new_login AND id != :current_user_id
    //$sql = $conect->prepare ("SELECT * FROM admin WHERE login = :new_login AND id = :user_id");
$name     = "";
$login    = "";
$pasword  = "";
$paswor_d = "";
$error    = array();

$sql = $conect->prepare("SELECT * FROM admin WHERE id = :id");
$sql->bindParam(':id', $_SESSION['in']);
$sql->execute();
$result = $sql->fetch();
if(empty($result)) {
    header("Location: index.php");
    exit();
}
    
if(!empty($_POST)) {
    if(!empty($_POST['name'])) {
        if(is_scalar($_POST['name'])) {
            if(strlen($_POST['name'])<20) {
                $name=  trim(strip_tags($_POST['name']));
            } else {
                $error[] = "Слишком длинное имя";
            }
        } else {
            $error[] = "Несуществующие данные";
        }
    } else {
        $error[] = "Введите имя";
    }
    
    if(!empty($_POST['login'])) {
            if(is_scalar($_POST['login'])) {
                if(strlen($_POST['login'])<20) {
                    $login= trim(strip_tags($_POST['login']));
                } else { 
                    $error[] = "Слишком длинный логин";
                }
            } else {
                $error[] = "Не существующие данные";
            }
        } else {
        $error[] = "Введите Логин";
        }
    
    if(!empty($_POST['pasword']) || !empty($_POST['paswor_d'])) {
        if(!empty($_POST['pasword'])) {
            if(is_scalar($_POST['pasword'])) {
                if(strlen($_POST['pasword'])<20) {
                     $pasword=  trim(strip_tags($_POST['pasword']));
                }else {
                    $error[]= "Слишком длинный пароль";
                }
            }else {
                $error[]= "Не существующий пароль";
            }
        }else {
            $error[] = "Введите ПАРОЛЬ";
        }
        if(!empty($_POST['paswor_d']) ) {
            if(is_scalar($_POST['paswor_d'])) {
                if(strlen($_POST['paswor_d'])<20) {
                        $paswor_d=  trim(strip_tags($_POST['paswor_d']));
                }else {
                    $error[]= "Слишком длинный пароль";
                }
            }else {
                $error[]= "Не существующий пароль";
            }
        }else {
            $error[] = "Введите ПАРОЛЬ";
        }
        if($pasword != $paswor_d) {
            $error[] = "Пароли должны быть ощинаковыми";
        }
        
    }

    if (!empty($login)) {
        $sql = $conect->prepare("SELECT * FROM admin WHERE login = :login AND id != :id");
        $sql->bindParam(':login', $login);
        $sql->bindParam(':id', $_SESSION['in']);
        $sql->execute();
        $result = $sql->fetchAll();
        if(!empty($result)) {
            $error[] = "Логин занят, введите другой";
        }
    }
    
    $result['name'] = $_POST['name'];
    $result['login'] = $_POST['login'];
    $result['pasword'] = $_POST['pasword'];
    $result['pasword'] = $_POST['paswor_d'];
    
    if (empty($error)) {
        
        $sql = $conect->prepare("UPDATE admin set name= :name, login= :login WHERE id= :id");
        $sql->bindParam(':name',  $name);
        $sql->bindParam(':login', $login);
        $sql->bindParam(':id',    $_SESSION['in']);
        $sql->execute();
        
        if (!empty($pasword)) {
            $sql = $conect->prepare("UPDATE admin set pasword= :pasword WHERE id= :id");
            $sql->bindParam(':pasword', $pasword);
            $sql->bindParam(':id',$_SESSION['in']);
            $sql->execute();
        }
        header("Location:index.php?r=my_page");
        }
}