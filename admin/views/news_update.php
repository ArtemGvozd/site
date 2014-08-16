<?php head(); ?>
<div id="content_admin">
    <form method="POST">
        <table class="table table-hover">
            <tr>
                <td class="active"><b>Заголовок:</b></td><td> <input type="text" name="title" value="<?php echo $result['title'] ?>"></td>
            </tr>
            <tr>
                <td class="active"><b>Описание:</b></td><td> <input type="text" name="description" value="<?php echo $result['description'] ?>"></td>
            </tr>
            <tr>
                <td class="active"><b>Контент:</b></td><td> <textarea name="content" cols="50" rows="20"><?php echo $result['content'] ?></textarea></td>
            </tr>
            <tr>
                <td></td><td> <input type="submit" name="buton"      value=" Изменить " /></td>
            </tr>
        </table>
    </form>
</div>
<?php foot(); ?>