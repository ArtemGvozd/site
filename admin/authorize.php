<?php
session_start();
$error = array();
if (isset($_POST['go'])) {
    if(!empty($_POST)) {
        if(empty($_POST['login'])){
            $error[]= "Пустой логин и пароль";
        }else {
            include "../bd/configuration.php";
            $conect = new PDO("mysql:host=" . DB_SERVER_NAME. ";dbname=" . DB_NAME,DB_LOGIN,DB_PASW);
            //указываем переменные с базы данных;
            $sql = $conect->prepare("SELECT * FROM admin WHERE login= :login AND pasword = :pasword"); 
            $sql->bindParam(':login', $_POST['login']);// переменные и метод из формы ;
            $sql->bindParam(':pasword', $_POST['pass']); // переменные и метод из формы ;
            $sql->execute();
            $result = $sql->fetch();
                if (empty($result)){
                    $error[]= "BAD логин и пароль";
                } else {
                    $_SESSION['in'] = $result['id'];
                    header ("Location: index.php");
                    exit;
                }
        }
    }
}
?>
<center>
<form action=""  method="post" >
    <table border="0">
        <tr>
            <td>Login: </td><td><input type="text" name="login" /></td></tr>
        <tr>
            <td>Password: </td> <td><input type="password" name="pass"></td></tr>
        <tr>
            <td></td> <td><input type="submit" name="go" value="Go_GO_gO" /></td></tr>
    </table>
</form>
<?php
foreach ($error as $i)
{
echo $i . "<br>";
}
?>
</center>
