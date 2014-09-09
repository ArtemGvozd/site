<?php head(); ?>
<div class="panel panel-default">
    <div class="btn-group">
        <a href="index.php?r=news_create" button type="button" class="btn btn-info"> Добавление Администратора </button></a>
    </div>
<?php if ($result) : ?>
    <table class="table table-hover">
    <tr>
        <td class="info"><b>ID</b></td>
        <td class="info"><b>Login</b></td>
        <td class="info"><b>Password</b></td>
        <td class="info"><b>Name</b></td>
        <td class="info"><b>Изменение / Удаление</b></td>
    </tr>
<?php foreach ($result as $item) : ?>
<tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['login']; ?></td>
    <td><?php echo $item['pasword']; ?></td>
    <td><?php echo $item['name']; ?></td>
    <td><a href="index.php?r=my_page_update&id=<?php echo $item['id']; ?>" button type="button" class="btn btn-info"> Изменить </a>
        <a href="index.php?r=my_page_delete_confirm&id=<?php echo $item['id']; ?>" button type="button" class="btn btn-default"> Удалить </a></td>

</tr>
<?php endforeach; ?>
</table>
    <center>
        <ul class="pagination">
            <li><a href="index.php?r=admins&page=<?php echo $page - 1 ?>">&laquo;</a></li>
            <?php foreach ($pages as $q) { ?>
                <li class><a href="index.php?r=admins&page=<?php echo $q ?>"><?php echo $q ?>   </a></li>
            <?php } ?>
            <li><a href="index.php?r=admins&page=<?php echo $page + 1 ?>">&raquo;</a></li>
        </ul>
    </center>
</div>
<?php endif;?>
<?php foot(); ?>
