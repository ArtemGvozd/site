<?php head();?>
<div class="panel panel-default"><br />
    <div class="btn-group">
        <a href="index.php?r=news_create" button type="button" class="btn btn-default"> Добавление Продукта </button></a>
    </div><br /><br />

    <?php if ($result) : ?>
    <table class="table table-hover">
        <tr>
            <td class="info">ID</td>
            <td class="info"><b> Имя </b></td>
            <td class="info"><b> Описание </b></td>
            <td class="info"><b>Изменение / Удаление</b></td>
            <td class="info"><b>Картинка</b></td>
        </tr>
        <?php foreach ($result as $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['description']; ?></td>
                <td><a href="index.php?r=products_update&id=<?php echo $item['id']; ?>" button type="button"
                       class="btn btn-info"> Изменить </a>
                    <a href="index.php?r=products_delete_confirm&id=<?php echo $item['id']; ?>" button type="button"
                       class="btn btn-default"> Удалить </a>
                </td>
                <td>
                    <img src="<?php echo "../gallery/" . $item['image_name']; ?> " width="60" height="50">
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <center>
        <ul class="pagination">
            <li><a href="index.php?r=products_list&page=<?php echo $page - 1 ?>">&laquo;</a></li>
            <?php foreach ($pages as $q) { ?>
                <li class><a href="index.php?r=products_list&page=<?php echo $q ?>"><?php echo $q ?>   </a></li>
            <?php } ?>
            <li><a href="index.php?r=products_list&page=<?php echo $page + 1 ?>">&raquo;</a></li>
        </ul>
    </center>
</div>
<?php endif; ?>
<?php foot(); ?>
