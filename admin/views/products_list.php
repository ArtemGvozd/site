<?php
head();?>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="index.php?r=products_create"> Добавление Продукта </a><br>
    </div>

<?php if ($result) : ?>
    <table class="table table-hover">
        <tr>
            <td class="info">ID</td>
            <td class="info"><b> Имя </b></td>
            <td class="info"><b> Описание </b></td>
            <td class="info"><b>Удаление / Изменение</b></td>
            <td class="info"><b>Картинка</b></td>
        </tr>
        <?php foreach ($result as $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['description']; ?></td>
                <td><button type="button" class="btn btn-default"><a href="index.php?r=products_delete_confirm&id=<?php echo $item['id']; ?>"> Удалить </a></button>
                        <button type="button" class="btn btn-default"><a href="index.php?r=products_update&id=<?php echo $item['id']; ?>"> Изменить </a></button>
                </td>
                <td>
                    <img src="<?php echo "../gallery/". $item['image_name']; ?> " width="60" height="50">
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
// выводим ссылки Список на количество страниц
    echo "<center>";
    foreach($pages as $q) {
        if($page==$q) {
            echo '<b>';
        }
        print '<a href="index.php?r=products_list&page='.$q.'">' . $q . " | " . "</a>";
        if($page==$q) {
            echo '</b>';
        }
    }
    echo "</center>";
    ?>
    </div>
<?php endif; ?>
<?php foot(); ?>
