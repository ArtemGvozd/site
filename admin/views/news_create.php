<?php head(); ?>
    <div id="content_admin">
    <b> Добавление Новостей </b>
<form action="" method="POST">
    <table border="1">
    <tr>
        <td> Заголовок:</td><td> <input type="text" name="title" value=""></td></tr>
    <tr>
        <td> Описание:</td><td> <input type="text" name="description"></td></tr>
    <tr>
        <td>  Контент:</td><td> <textarea name="content" cols="50" rows="20"></textarea></td></tr>
    <tr>
        <td></td><td> <input type="submit" name="buton" value=" Жмакай " /></tr></tr>
    </table>
</form>
?>
<center>
<?php
foreach ($error as $q) {
    echo $q . "<br>";
}
?>
</center>
</div>
<?php foot(); ?>