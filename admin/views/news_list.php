<?php head();?>
<div id="content_admin">
<a href="index.php?r=news_create"> Добавление Новостей </a><br>

<?php
$from=($page-1)*5;	//кол-во записей начиная с    или от .. 
$to=($page)*5;		//кол-во записей ДО   или По ...
echo $from . "-" . $to;
?>

<?php if ($result) : ?>
<table border="1">
    <tr>
        <td>ID</td>
        <td><b>Заголовок</b></td>
        <td><b>Описание</b></td>
        <td><b>Полный текст</b></td>
        <td><b>Удаление / Изменение</b></td>
    </tr>
<?php foreach ($result as $item) : ?>
<tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['title']; ?></td>
    <td><?php echo $item['description']; ?></td>
    <td><?php echo $item['content']; ?></td>
    <td><a href="index.php?r=news_delete&id=<?php echo $item['id']; ?>"> Удалить </a>  / 
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
    