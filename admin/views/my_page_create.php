<?php head();?>
<div id="content_admin">
    <form method="POST">
        <table border="1">
            <tr>
                <td> Имя </td><td><input type="text" name="name" ></td></tr>
            <tr>
                <td> Логин </td><td><input type="text" name="login" ></td></tr>
            <tr>
                <td> Пароль </td><td><input type="password" name="pasword"></td></tr>
            <tr>
                <td> Подтвердите пароль </td><td><input type="password" name="paswor_d" ></td></tr>
            <tr>
                <td></td><td><input type="submit" name="buton" value=" Создать "</td></tr>
        </table>
    </form>
<center>
<?php
foreach ($error as $q) {
    echo $q . "<br>";
}
?>
</center>
</div>
<?php foot();?>