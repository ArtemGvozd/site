<?php
$name="";
$phone="";
$message="";
$email="";
$error = array();

if(!empty($_POST)) {
    if(!empty($_POST['name'])){
        if(is_scalar($_POST['name'])) {
            if(strlen($_POST['name'])<20) {
                $name =  trim(strip_tags($_POST['name']));
            } else {
                $error[] = "Слишком длинное имя";
            }
        } else {
            $error[] = "Повторите попытку";
        }
    } else {
        $error[] = "Введите имя";
}

    if(!empty($_POST['email'])){
        if(is_scalar($_POST['email'])) {
            if(strlen($_POST['email'])<50) {
                if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $email = ($_POST['email']);
                }else {
                    $error[] = "Введите email";
                }
            }else {
                $error[] = "Повторите попытку";
            }
        }else {
            $error[] = "Попробуйте еще раз";
        }
    }else {
    $error[] = "пустой email";
    }

    if(!empty($_POST['message'])) {
        if(is_scalar($_POST['message'])) {
            $message = trim(strip_tags($_POST['message']));
        }else {
            $error[] = "Повторите попытку";
        }
    }else {
        $error[] = "Введите текст соообщения";
    }

    if(!empty($_POST['phone']))  {
        if(strlen($_POST['phone'])<20) {
            $phone = trim(strip_tags($_POST['phone']));
        }else {
            $error[] = "Слишком длиный номер телефона";
        }
    }else {
        $error[] = "Введите номер телефона";
    }
}

echo "<center>";    
if(empty($error)){
    include 'configuration.php';
    $conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW);
    $zapros = "INSERT INTO mebli(name,email,phone,message,date_sent)VALUES('$name','$email','$phone','$message',NOW())";
    $result = $conect->exec($zapros); //запуск запрос на выполнение и возвращает кол-во строк
    print("Hello: " . $name . "<br>");
    print("Your number phone: " . $phone . "<br>");
    print("Your email: " . $email . "<br>");
    print("Your message: " . $message . "<br>");
} else { ?>
    <form action="../bd/action.php" method="POST">
            Name: <input type="text" name="name" size="20" maxlength="20" value="Pleas your name"><br>
            Phone: <input type="text" name="phone" size="20" maxlength="20" value="Your number phone"><br>
            Email: <input type="text" name="email" size="50" maxlength="50" value="Your Email"><br>
            Message: <textarea name="message" cols="35" rows="5"></textarea><br>
                     <input type="submit" name="buton"      value="   Enter   " />
    </form>
<?php
}
?>
<?php
foreach ($error as $v) {
    echo $v;
}
echo '</center>';
?>
    
    