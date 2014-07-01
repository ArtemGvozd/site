<?php head(); ?>
<div id="content_admin">
<form method="POST">
    <table border="1">
        <tr>
            <td>Заголовок:</td><td> <input type="text" name="title" value="<?php echo $result['title'] ?>"></td>
        </tr>
        <tr>
            <td>Описание:</td><td> <input type="text" name="description" value="<?php echo $result['description'] ?>"></td>
        </tr>
        <tr>
            <td>Контент:</td><td> <textarea name="content" cols="50" rows="20"><?php echo $result['content'] ?></textarea></td>
        </tr>
        <tr>
            <td></td><td> <input type="submit" name="buton"      value=" Изменить " /></td>
        </tr>
    </table>
</form>
</div>
<?php foot(); ?>