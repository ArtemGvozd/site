<?php head();?>
<div id="content_admin">
    <form method="POST">
        <table class="table table-hover">
            <tr>
                <td class="active"> Имя:</td><td> <input type="text" name="name" value="<?php echo $result['name'] ?>"></td></tr></tr>
            <tr>
                 <td class="active">ЛОГИН:</td><td> <input type="text" name="login" value="<?php echo $result['login'] ?>"></td></tr></tr>
            <tr>
                <td class="active">Пароль:</td><td> <input type="password" name="pasword" value=""></td></tr></tr>
            <tr>
               <td class="active">Повторите пароль:</td><td> <input type="password" name="paswor_d" value=""></td></tr></tr>
        <tr>
            <td></td><td><input type="submit" name="buton" value=" Изменить "></td></tr>
        </table>
    </form>    
<center>
<?php
foreach($error as $p) {
    echo $p . "<br>";
}
?>
</center>
</div> 
<?php foot();?>