<?php head();?>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="index.php?r=news_create"> Добавление Новостей </a><br>
    </div>

<?php if ($result) : ?>
    <table class="table table-hover">
    <tr>
        <td class="info">ID</td>
        <td class="info"><b>Заголовок</b></td>
        <td class="info"><b>Описание</b></td>
        <td class="info"><b>Полный текст</b></td>
        <td class="info"><b>Удаление / Изменение</b></td>
    </tr>
<?php foreach ($result as $item) : ?>
<tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['title']; ?></td>
    <td><?php echo $item['description']; ?></td>
    <td><?php echo $item['content']; ?></td>
    <td><a href="index.php?r=delete_realy&id=<?php echo $item['id']; ?>"> Удалить </a>  /
        <a href="index.php?r=news_update&id=<?php echo $item['id']; ?>"> Изменить </a>
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
            print '<a href="index.php?r=news_list&page='.$q.'">' . $q . " | " . "</a>";
            if($page==$q) {
                echo '</b>';
            }
        }
        echo "</center>";
?>
    </div>
<?php endif; ?>
<?php foot(); ?>
    