<?php
session_start();
$error = array();
if (isset($_POST['go'])) {
    if(!empty($_POST)) {
        if(empty($_POST['login'])){
            $error['login'] = "Пустой логин и пароль";
        }else {
            include "../bd/configuration.php";
            $conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW);
            //указываем переменные с базы данных;
            $hash = md5($_POST['pass']);
            $sql = $conect->prepare("SELECT * FROM admin WHERE login= :login AND pasword = :pasword"); 
            $sql->bindParam(':login', $_POST['login']);// переменные и метод из формы ;
            $sql->bindParam(':pasword', $hash); // переменные и метод из формы ;
            $sql->execute();
            $result = $sql->fetch();
                if (empty($result)){
                    $error['res'] = "BAD логин и пароль";
                } else {
                    $_SESSION['in'] = $result['id'];
                    header ("Location: index.php");
                    exit;
                }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="../assets/3p/jquery-2.1.1.js"></script>
    <script src="../assets/3p/bootstrap/js/bootstrap.min.js"></script>
    <link href="../assets/3p/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<br />
<center>
    <h1>Авторизация</h1>
</center>
<br />
<br />
<form action="" method="POST" class="form-horizontal" role="form">
    <div class="form-group <?php if (!empty($error['login'])) : ?> has-error <?php endif; ?>">
        <label for="inputLogin" class="col-sm-5 control-label">Login</label>
        <div class="col-sm-3">
            <input type="text" name="login" class="form-control" id="inputLogin" placeholder="Введите логин">
        </div>
        <?php if (!empty($error['login'])) : ?>
            <span class="help-block"><?php echo $error['login']; ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group <?php if (!empty($error['login'])) : ?> has-error <?php endif; ?>">
        <label for="inputPassword" class="col-sm-5 control-label">Password</label>
        <div class="col-sm-3">
            <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="ВВедите пароль">
        </div>
        <?php if (!empty($error['res'])) : ?>
            <span class="help-block"><?php echo $error['res']; ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-5 col-sm-3">
            <button type="submit" name="go" class="btn btn-primary">Войти</button>
        </div>
    </div>
</form>
</div>
</body>
</html>