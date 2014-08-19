<?php
$name = "";
$phone = "";
$message = "";
$email = "";
$error = array();
if (!empty($_POST)) {
    if (!empty($_POST['name'])) {
        if (is_scalar($_POST['name'])) {
            if (strlen($_POST['name']) < 20) {
                $name = trim(strip_tags($_POST['name']));
            } else {
                $error['name'] = "Слишком длинное имя!";
            }
        } else {
            $error['name'] = "Повторите попытку!";
        }
    } else {
        $error['name'] = "Введите имя!";
    }

    if (!empty($_POST['email'])) {
        if (is_scalar($_POST['email'])) {
            if (strlen($_POST['email']) < 50) {
                if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $email = ($_POST['email']);
                } else {
                    $error['email'] = "Введите email!";
                }
            } else {
                $error['email'] = "Повторите попытку!";
            }
        } else {
            $error['email'] = "Попробуйте еще раз!";
        }
    } else {
        $error['email'] = "Пустой email!";
    }

    if (!empty($_POST['message'])) {
        if (is_scalar($_POST['message'])) {
            $message = trim(strip_tags($_POST['message']));
        } else {
            $error['message'] = "Повторите попытку!";
        }
    } else {
        $error['message'] = "Введите текст соообщения!";
    }

    if (!empty($_POST['phone'])) {
        if (strlen($_POST['phone']) < 20) {
            $phone = trim(strip_tags($_POST['phone']));
        } else {
            $error['phone'] = "Слишком длиный номер телефона!";
        }
    } else {
        $error['phone'] = "Введите номер телефона!";
    }
}

if ($phone && $name && $email && $message) {
    $conect = new PDO("mysql:host=" . DB_SERVER_NAME . ";dbname=" . DB_NAME, DB_LOGIN, DB_PASW);
    $zapros = "INSERT INTO mebli(name,email,phone,message,date_sent)VALUES('$name','$email','$phone','$message',NOW())";
    $result = $conect->exec($zapros); //запуск запрос на выполнение и возвращает кол-во строк
?>
    <br />
    <br />
    <br />
<center>Спасибо, Ваше сообщение успешно отправленно!</center>
<?php
    } else {
?>
    <script src="assets/3p/jquery-2.1.1.js"></script>
    <script src="assets/3p/bootstrap/js/bootstrap.min.js"></script>
    <link href="assets/3p/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <br />
    <br />
    <form action="" method="POST" class="form-horizontal" role="form">
        <div class="form-group <?php if (!empty($error['name'])) : ?> has-error <?php endif; ?>">
            <label for="inputName" class="col-sm-4 control-label">Имя:</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Введите ваше имя">
            </div>
            <?php if (!empty($error['name'])) : ?>
            <span class="help-block"><?php echo $error['name']; ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php if (!empty($error['phone'])) : ?> has-error <?php endif; ?>">
            <label for="inputPhone" class="col-sm-4 control-label">Телефон:</label>
            <div class="col-sm-3">
                <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Введите номер телефона">
            </div>
            <?php if (!empty($error['phone'])) : ?>
                <span class="help-block"><?php echo $error['phone']; ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php if (!empty($error['email'])) : ?> has-error <?php endif; ?>">
            <label for="inputEmail" class="col-sm-4 control-label">Email:</label>
            <div class="col-sm-3">
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Введите почту">
            </div>
            <?php if (!empty($error['email'])) : ?>
                <span class="help-block"><?php echo $error['email']; ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php if (!empty($error['message'])) : ?> has-error <?php endif; ?>">
            <label for="inputMessage" class="col-sm-4 control-label">Текст сообщения:</label>
            <div class="col-sm-3">
                <textarea class="form-control" name="message" rows="7" id="inputMessage"></textarea>
            </div>
            <?php if (!empty($error['message'])) : ?>
                <span class="help-block"><?php echo $error['message']; ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="submit" name="buton" class="btn btn-primary">Отправить</button>
            </div>
        </div>
</form>

<?php
}
?>