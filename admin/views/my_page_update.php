<?php head();?>
<div id="content_admin">
    <form method="POST">
        <table borfer="1">
            <tr>
                <td> Имя:</td><td> <input type="text" name="name" value="<?php echo $result['name'] ?>"></td></tr></tr>
            <tr>
                 <td>ЛОГИН:</td><td> <input type="text" name="login" value="<?php echo $result['login'] ?>"></td></tr></tr>
            <tr>
                <td>Пароль:</td><td> <input type="password" name="pasword" value=""></td></tr></tr>
            <tr>
               <td>Повторите пароль:</td><td> <input type="password" name="paswor_d" value=""></td></tr></tr>
        <tr>
            <td></td><td><input type="submit" name="buton" value=" Изменить "></td></tr>
        </table>
    </form>
</div>     
<center>
<?php
foreach($error as $p) {
    echo $p . "<br>";
}
?>
</center>
 
<?php foot();?>